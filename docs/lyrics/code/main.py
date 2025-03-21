from googleapiclient.discovery import build
from google.oauth2 import service_account
import re 
import markdown
from html.parser import HTMLParser

# Google Doc ID (Extracted from the URL)
DOC_ID = "1Jb9mVmj15wAiZBPxfwJCSWcbguewadsUuGIL5aP9Doo"

def download_doc(doc_id, format_type="word"):
    # Load credentials
    SCOPES = ['https://www.googleapis.com/auth/drive']
    SERVICE_ACCOUNT_FILE = 'coherent-vertex-228809-3431ceb3ed0b.json'  # Replace with your file

    credentials = service_account.Credentials.from_service_account_file(
        SERVICE_ACCOUNT_FILE, scopes=SCOPES
    )

    # Export formats:
    EXPORT_FORMATS = {
        "word": "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        "md": "text/markdown",
        "txt": "text/plain",
        "rtf": "application/rtf"
    }

    service = build('drive', 'v3', credentials=credentials) # Build the service
    request = service.files().export_media(fileId=doc_id, mimeType=EXPORT_FORMATS[format_type])    
    return request.execute().decode("utf-8")  

def to_url_safe(title):
    """Sanitize title for filename and append index for uniqueness"""
    title = re.sub(r'[^\x00-\x7F]+', '', title) # remove all non-english char
    title = re.sub(r'[^\w\s-]', '', title).strip()  # Remove all non-word characters except spaces and hyphens
    title = re.sub(r'\s+', '-', title)  # Replace spaces with hyphens
    return f"{title[:50]}".lower()  # Limit filename length

def extend_markdown_to_enable_multiline_block_quote(markdown_text):
    """
    Find every >\>\> and add a > between every line between these markers. Then remove these markers
    """
    lines = markdown_text.split("\n")
    new_lines = []
    in_block_quote = False
    for line in lines:
        if line.startswith("\>\>\>"):
            in_block_quote = not in_block_quote
            if in_block_quote:
                new_lines.append(">")
            else:
                new_lines.append("")
        elif in_block_quote:
            new_lines.append(f"> {line}")
        else:
            new_lines.append(line)
    md_string = "\n".join(new_lines).replace("\n\\>","\n>")
    return md_string

def split_markdown(input_markdown):
    pages = []
    
    content = input_markdown.replace("\r\n", "\n")  # Normalize line endings
    sections = re.split(r'\n(?=# )', content) # Ensure we split only when `#` is at the start of a line

    inside_code_block = False
    for i, section in enumerate(sections):
        if not section.strip(): continue  # Skip empty sections
        # Track code blocks to avoid splitting inside them
        if section.count("```") % 2 == 1:  # Odd number of backticks means we are inside a block
            inside_code_block = not inside_code_block
            continue
        section = extend_markdown_to_enable_multiline_block_quote(section)
        pages.append( section )

    return pages

# Function to extract the title from the first line of the markdown
def extract_title(md_text):
    lines = md_text.split("\n")
    if lines:
        # The first line is the title
        return lines[0].strip('#').strip()
    return "Untitled Post"


# Function to create a minimalistic HTML structure with a responsive nav bar
def create_html_page(html_content, page_title, css_filename="code/styles.css", nav_links=[], current_title=""):
    nav_links_html = "".join(
        f'<li><a href="{link["url"]}" class="{"current" if link["title"] == current_title else ""}">{link["title"]}</a></li>'
        for link in nav_links
    )
    
    html_page = f"""
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{page_title}</title>
        <link rel="stylesheet" href="{css_filename}">
    </head>
    <body>
        <!-- Menu Button for mobile -->
        <button class="menu-btn" id="menuBtn" onclick="toggleMenu()">☰</button>

        <!-- Navigation Bar -->
        <nav id="navbar">
            <ul> {nav_links_html} </ul>
        </nav>

        <!-- Content Section -->
        <div class="content">
            <button class="toggle-btn" id="themeToggleBtn" onclick="toggleTheme()">🌙</button>
            {html_content}
        </div>

        <script>
            let darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {{
                document.body.setAttribute('data-theme', 'dark');
                document.getElementById('themeToggleBtn').textContent = '☀️';
            }}
            function toggleTheme() {{
                darkMode = !darkMode;
                document.body.setAttribute('data-theme', darkMode ? 'dark' : 'light');
                localStorage.setItem('darkMode', darkMode);
                document.getElementById('themeToggleBtn').textContent = darkMode ? '☀️' : '🌙';
            }}
            
            // Mobile menu toggle
            function toggleMenu() {{
                const nav = document.getElementById('navbar');
                nav.classList.toggle('open-nav');
            }}
        </script>
    </body>
    </html>
    """
    return html_page

class HTMLFilter(HTMLParser):
    text = ""
    def handle_data(self, data):
        self.text += data
def unmark(markdown_text):
    html_content = markdown.markdown(markdown_text)
    html_filter = HTMLFilter()
    html_filter.feed(html_content)
    return html_filter.text

# Generate HTML files for each Markdown entry and an index page
def generate_blog_pages(markdown_strings):    
    # Create a list of nav links
    nav_links = []
    snippets = []
    
    for md_string in markdown_strings:
        if md_string.startswith("# draft"): continue
        title = extract_title(md_string)
        nav_links.append({"title": title, "url": f"{to_url_safe(title)}.html"})
        snippet = " ".join(unmark(md_string).split("\n")[3:])[:222].rsplit(' ', 1)[0] + "..."  # Extract the first few lines as a snippet
        snippets.append({"title": title, "snippet": snippet, "url": f"{to_url_safe(title)}.html"})

    # Create each HTML file
    for md_string in markdown_strings:
        if md_string.startswith("# draft"): continue
        # Split the markdown into Chinese and English parts
        blocks = md_string.split("\n\n")
        title = blocks.pop(0)
        chinese_blocks = []
        english_blocks = []
        footers = []
        for line in blocks:
            # if is url:
            print(line)
            if re.search(r'http[s]?://(?:[a-zA-Z]|[0-9]|[$-_@.&+]|[!*\\(\\),]|(?:%[0-9a-fA-F][0-9a-fA-F]))+', line):
                footers.append(line)
            elif re.search(r'[\u4e00-\u9fff]', line):
                chinese_blocks.append(line)
            else:
                english_blocks.append(line)
        
        chinese_md = "\n\n".join(chinese_blocks)
        print(chinese_md)
        english_md = "\n\n".join(english_blocks)
        
        chinese_html = markdown.markdown(chinese_md)
        english_html = markdown.markdown(english_md)
        footers_html = markdown.markdown("\n\n".join(footers))
        
        html_content = f"""
        {markdown.markdown(title)}
        <div class="content-container" style="display: flex;">    
            <div style="flex: 1;">
                {chinese_html}
            </div>
            <div style="flex: 1;">
                {english_html}
            </div>
        </div>
        <div class="footer deemphasized">
            {markdown.markdown(footers_html)}
        </div>
        """
        
        page_title = extract_title(md_string)
        html_page = create_html_page(html_content, page_title, nav_links=nav_links, current_title=page_title)
        file_path = f"../{to_url_safe(page_title)}.html"
        with open(file_path, 'w') as file:
            file.write(html_page)

    # Create the index page
    title = "诗歌翻译"
    index_content = f"<h1>{title}</h1>"
    for snippet in snippets:
        index_content += f"""<div class="index-button"><a href="{snippet["url"]}" style="text-decoration: none;"><div class="index-heading">{snippet["title"]}</div><span class="deemphasize"></span></a></div>"""

    index_page = create_html_page(index_content, title, nav_links=nav_links)
    with open("../index.html", 'w') as file:
        file.write(index_page)


md = download_doc(DOC_ID, "md")
markdown_strings = split_markdown(md)
print(markdown_strings)
generate_blog_pages(markdown_strings)