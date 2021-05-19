import minify_html

from pathlib import Path
txt_folder = Path().rglob('*.html')
files = [x for x in txt_folder]
print(files)
print("#############")
for f in files:
    read_text_file(f)
def read_text_file(file_path):
    with open(file_path, 'r', encoding="utf-8") as f:
        m = minify_html.minify(f, minify_js=True, minify_css=True)
    with open(file_path, 'w', encoding="utf-8") as f:
        f.write(m)
        m=""
