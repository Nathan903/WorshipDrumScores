killswitch=False
def read_text_file(file_path):
    with open(file_path, 'r', encoding="utf-8") as f:
        lines = f.readlines()
    print(type(lines))
    with open(file_path, 'w', encoding="utf-8") as f:
        killswitch=False
        for line in lines:
            if  ("document.body[atob(" in line):
                print("end")
                killswitch=False
            if ("el.innerHTML = atob(" in line) and not ("""el.innerHTML = atob("")"""in line):
                print(str(file_path)+": "+ line)
                killswitch = True
                f.write("""el.innerHTML = atob("");"""+"\n")
            elif killswitch:
                f.write("")
            else:
                f.write(line)
date = ""+input("input folder date e.g. 0430: ")
from pathlib import Path
txt_folder = Path(date).rglob('*index.html')
files = [x for x in txt_folder]
print(files)
print("#############")

# iterate through all file
for f in files:
    read_text_file(f)
print("#")
def c():
    def minify(file_path):
        with open(file_path, 'r', encoding="utf-8") as f:
            m = minify_html.minify(f.read(), minify_js=True, minify_css=True)
        with open(file_path, 'w', encoding="utf-8") as f:
            f.write(m)
            m=""
    import minify_html
    from pathlib import Path
    txt_folder = Path(date).rglob('*.html')
    files = [x for x in txt_folder]
    print(files)
    print("#############")
    for f in files:
        minify(f)
c()



        
