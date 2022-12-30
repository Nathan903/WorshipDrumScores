import os
import re
from pathlib import Path
import datetime
from datetime import timezone
from datetime import timedelta
from shutil import copyfile
import shutil
import subprocess
import sys

badseperators=["_","-","+","(",")","（","）",".",",","。","，"," ","/"]

SHA_TZ = timezone(
    timedelta(hours=8),
    name='Asia/Shanghai',
)
now=datetime.datetime.utcnow().replace(tzinfo=timezone.utc).astimezone(SHA_TZ) 


year = str(now.year)
def isChinese(s):
    if len(re.findall(r'[\u4e00-\u9fff]+', s))==0:
        return False
    else:
        return True
def getLastFriday():
    last_fri = (now.date()- datetime.timedelta(days=now.weekday())+ datetime.timedelta(days=4, weeks=-1))
    return(last_fri.strftime('%m%d'))

def checkbadseperators(s):
    if s[0].isnumeric() and (s[1].isnumeric() or s[1]==" "):
        return checkbadseperators(s[1:].strip())
    elif not(any(e in s for e in badseperators)):
        return(s)
    else:
        shortest_len=999
        for i in badseperators:
            if (i in s) and (s.index(i)<shortest_len):
                shortest = i
                shortest_len=s.index(i)
        i=shortest
        print("find bad seperator")
        if isChinese(s[0:s.index(i)]):
            return(s)
        return checkbadseperators(s[s.index(i)+1:].strip())
def prettyDate(s):
    return str(int(s[0:2]))+"/"+str(int(s[2:]))

files = [x for x in Path().rglob('*.pdf')]
fname = str(files[0])

if fname[0]==" ":
    fname = str(files[0]).strip()
    print("warning: space infront of file.")
    #print(fname)

name = fname.replace(".pdf","")

    
if fname[4]==" " and name[0:4].isnumeric() and int(name[0:4])<1232:
    date = name[0:4]
    title = name[4+1:]
else:
    print("warning: cannot find date, using auto date function: "+ getLastFriday())
    #print(fname)
    date=getLastFriday()
    title=checkbadseperators(name)

#print(prettyDate(date)+" | "+title)
print("../"+year+"/"+date)
if os.path.isdir("../"+year+"/"+date):
    print("ERROR: folder already exist")
    sys.exit()
    boom

copyfile(fname, "temp.pdf")

cmd = "pdf2htmlEX.exe --embed cfijo --dest-dir ../"+year+"/"+date+" --bg-format svg --fit-width 960 temp.pdf index.html"
subprocess.run(cmd)

copyfile(fname, Path("../"+year+"/"+date+"/"+fname))
os.remove(fname)
os.remove("temp.pdf")

body = """
        <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101311893);</script>
        <script async src="/js/js.js"></script>
        <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101311893ns.gif" /></p></noscript>
    </body>

    <script data-goatcounter="https://meh.goatcounter.com/count" async src="/js/count.js"></script>

    <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101316586);</script>
    <script async src="//static.getclicky.com/js"></script>"""

def read_text_file(file_path):
    with open(file_path, 'r', encoding="utf-8") as f:
        lines = f.readlines()
    with open(file_path, 'w', encoding="utf-8") as f:
        for l in lines:
            if  ("</title>" in l):
                f.write("<title>"+prettyDate(date)+" | "+title+"</title>")
            elif ("</body>" in l):
                f.write(body)
            else:
                f.write(l)
read_text_file("../"+year+"/"+date+"/index.html")

files = [x for x in Path().rglob('*链接.txt')]
if len(files)>0:
    os.remove(str(files[0]))


uuu="https://praise.pages.dev/blog/"+year+"/"+date
with open(date+"链接.txt", 'w', encoding="utf-8") as f:
    f.write(uuu)



timedate =(now ).strftime("%m%d")
timeyear=(now).strftime("%Y")
timenow=(now).strftime("%H:%M")
timethen=(now+ datetime.timedelta(0,240) ).strftime("%H:%M")
template = f"""_📢 `$fname$` 于 $date$上传成功！链接将在$then$生效：https://praise.pages.dev/blog/{timeyear}/$mmdd$_ \n"""
ttt=template.replace("$fname$",fname).replace("$date$",prettyDate(timedate)+" "+timenow).replace("$then$",timethen).replace("$mmdd$",date)
with open("readme.md", 'r', encoding="utf-8") as f:
    lines = f.readlines()
    lines[0]=ttt
with open("readme.md", 'w', encoding="utf-8") as f:
    f.writelines(lines)
print("DONE####")
