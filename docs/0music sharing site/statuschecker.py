txt=""
with open("musicsrc.txt") as f:
    for line in f:
        if not (line.startswith("#") or line.startswith("<")):
            txt+=line
txt=txt.strip().split("\n\n")


import requests
for line in txt:
    name, url =line.strip().split("\n")[:2]
    if url.startswith("http"):
        try:
            result = requests.get(url).status_code
        except:
            result = "404"
            
        print(result, name,url)

