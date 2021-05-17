import mytxt
from langconv import Converter
from zhconv import convert
import sys
import os
import fileinput
import random
import time
import datetime
import string
from pypinyin import Style, pinyin
import re
import htmlmin
import zhon.hanzi

#might need updates
listsrc='weworshipshh_src.txt'
outputfile_name ="all.html"
otitle = "教会全歌单（简体）"

listsrc='musicsrc.txt'
outputfile_name ="index.html"
otitle = "自由赞美 streaming"




codeclist = ["mp3","m4a", "ogg"]

name_placeholder ="#name#"
src_placeholder ="#src#"

#outputfile_name =input("name for output HTML file: ") + ".html"
template = mytxt.template

outputfile = open(outputfile_name,"w", encoding="utf-8")
outputfile.write("")
outputfile.close()


tlist = template.split("$")
for i in range(len(tlist)):
    tlist[i]=(tlist[i][1:])
print("\n")

searchscript="""
<style>
#myInput {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMTguNzgzIDExOC43ODMiIHhtbG5zOnY9Imh0dHBzOi8vdmVjdGEuaW8vbmFubyIgd2lkdGg9JzIxJyBoZWlnaHQ9JzIxJyBmaWxsPScjYmFiYWI2Jz48cGF0aCBkPSJNMTE1Ljk3IDEwMS41OTdMODguNjYxIDc0LjI4NmE0Ny43NSA0Ny43NSAwIDAgMCA3LjMzMy0yNS40ODhjMC0yNi41MDktMjEuNDktNDcuOTk2LTQ3Ljk5OC00Ny45OTZTMCAyMi4yODkgMCA0OC43OThzMjEuNDg3IDQ3Ljk5NSA0Ny45OTYgNDcuOTk1YzEwLjE5NyAwIDE5LjY0Mi0zLjE4OCAyNy40MTQtOC42MDVsMjYuOTg0IDI2Ljk4NmMxLjg3NSAxLjg3MyA0LjMzMyAyLjgwNiA2Ljc4OCAyLjgwNmE5LjU4IDkuNTggMCAwIDAgNi43OTEtMi44MDZjMy43NDctMy43NTEgMy43NDctOS44MjctLjAwMy0xMy41Nzd6TTQ3Ljk5NiA4MS4yNDNjLTE3LjkxNyAwLTMyLjQ0My0xNC41MjUtMzIuNDQzLTMyLjQ0M3MxNC41MjYtMzIuNDQ0IDMyLjQ0My0zMi40NDRTODAuNDM5IDMwLjg4MiA4MC40MzkgNDguOCA2NS45MTQgODEuMjQzIDQ3Ljk5NiA4MS4yNDN6Ii8+PC9zdmc+");
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 90%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  color: black;
}
</style>

<script>
function myFunction(){var e,t,n,a;for(e=document.getElementById("myInput").value.toUpperCase().replace(/\s+/g,""),t=document.getElementById("myTable").getElementsByTagName("p"),a=0;a<t.length;a++)(n=t[a])&&((n.textContent||n.innerText).toUpperCase().replace(/\s+/g,"").indexOf(e)>-1||n.id.toUpperCase().indexOf(e)>-1?t[a].style.display="":t[a].style.display="none")}
</script>
"""
"""
function myFunction() {
  var input, filter, table, tr, p, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase().replace(/\s+/g, '');
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("p");

  for (i = 0; i < tr.length; i++) {
    p = tr[i];
    if (p) {
  txtValue = p.textContent || p.innerText;
  if (txtValue.toUpperCase().replace(/\s+/g, '').indexOf(filter)>-1 ||p.id.toUpperCase().indexOf(filter)>-1) {
    tr[i].style.display = "";}
  else {tr[i].style.display = "none";}
  }
  }
}"""

#make output file
outputfile = open(outputfile_name,"a+",encoding="utf-8")

#http://stackoverflow.com/a/13752628/6762004
def strip_emoji(text):
    RE_EMOJI = re.compile('[\U00010000-\U0010ffff]', flags=re.UNICODE)
    return RE_EMOJI.sub(r'', text)

#https://blog.csdn.net/weixin_44676081/article/details/97620024
def is_Chinese(word):
    for ch in word:
        if '\u4e00' <= ch <= '\u9fff':
            return True
    return False

def cht_to_chs(line):
    return(convert(line, 'zh-cn'))

#get short title and initial (e.g. ['lzhl', '两只老虎'])
def getInitial(inputString):
    inputString=cht_to_chs(inputString).replace("祢", "你").replace("祂", "他").replace("著","着")
    if is_Chinese(strip_emoji(inputString[0:4])):
        l1 = inputString.split("(")
        l11 = l1[0].split("（")
        l2 = l11[0].split(" ")
        i=0
        l = l2[0].translate(str.maketrans('','',string.punctuation))
        if(len(l2)>1 and len(l2[0])<2 and len(l2[0])<len(l2[1])):
            l = ("".join(l2[0:2])).translate(str.maketrans('','',string.punctuation))
        l = l.translate(str.maketrans('','',zhon.hanzi.punctuation))
        return ([strip_emoji("".join(i[0] for i in pinyin(l, style=Style.FIRST_LETTER, strict=False))), l])
    else:
        l1 = inputString.split("(")
        l11 = l1[0].split("（")
        l = l11[0].translate(str.maketrans('','',string.punctuation))
        l = l.translate(str.maketrans('','',zhon.hanzi.punctuation))
        return ([strip_emoji(l.replace(" ","").lower()), l])

def rp(filename, text_to_search, replacement_text):
    with fileinput.FileInput(filename, inplace=True, backup='.bak') as file:
        for line in file:
            print(line.replace(text_to_search, replacement_text), end='')
out = ""
ww=""
namelist = []
with open(listsrc, 'r', encoding="utf-8") as in_file:
    lastLineIsName=False
    lastLineIsSrc=False
    for line in in_file:
        #pass if line is
        w=""
        if "#" in line.strip()[0:2]:
            pass
        elif "<h" in line.strip():
            w=line.strip()#"<hr>"+line.strip()
        elif "<i" in line.strip() or "<p" in line.strip():
            w=line.strip()
        elif (len(line.strip())==0):
            if lastLineIsSrc:
                w=tlist[7]+tlist[8]
            lastLineIsName=False
            lastLineIsSrc=False
        #append if line does not contain extension of codec
        elif not(any(e in line.strip() for e in codeclist) or "http" in line.strip()):
            w=tlist[0]+getInitial(line.strip())[0]+tlist[1]+getInitial(line.strip())[0]+tlist[2]+line.strip()+tlist[3]
            namelist.append(getInitial(line.strip()))
            if lastLineIsSrc:
                w=tlist[7]+w
            lastLineIsName=True
            lastLineIsSrc=False
        else:
            w=tlist[5]+line.strip()+tlist[6]
            if lastLineIsName:
                w=tlist[4]+w
            lastLineIsName=False
            lastLineIsSrc=True
        ww=ww+w
    if lastLineIsSrc:
        ww=ww+tlist[7]+tlist[8] +tlist[8]
out = out + """<div id="myTable">"""+ww+"</div>"

namelist.sort(key = lambda x: x[0])
#print(namelist)

#make head
tableofcontent="<hr><br><b>目录（拼音首字母排序）:</b><br>"
hd=mytxt.head(otitle,"")
for i in namelist:
    tableofcontent+=" | <a href=\"#" + i[0] + "\">" + i[1]+"</a>"
tableofcontent+=" |"
hd+=searchscript+"""<br><br><input type="text" id="myInput" onkeyup="myFunction()" placeholder="输入拼音首字母/中文，按enter搜索" title="Type in a name">"""

#add heat to body, then add footer
out=hd+out+tableofcontent+mytxt.foot+str(datetime.datetime.now())
out=htmlmin.minify(out+"</html>", remove_empty_space=True)
outputfile.write(out)
outputfile.close()


