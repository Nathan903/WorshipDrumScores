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
codeclist = ["mp3","m4a", "ogg"]
templatefilename = "bodytemplate.html"
head_file_name = "head.html"
name_placeholder ="#name#"
src_placeholder ="#src#"
outputfile_name ="index.html"

#read body template
f=open(templatefilename, "r", encoding="utf-8")
template = str(f.read())
f.close()

#read head template
f=open(head_file_name , "r", encoding="utf-8")
head = str(f.read())
f.close()

outputfile = open(outputfile_name,"w", encoding="utf-8")
outputfile.write("")
outputfile.close()


tlist = template.split("$")
for i in range(len(tlist)):
    tlist[i]=(tlist[i][1:])
print(tlist)
print("\n")

#make working template file
"""
workingtemplatefilename="workingtemplatefile_"#+str(time.time())
workingtemplatefile = open(workingtemplatefilename,"a")
workingtemplatefile.write(template)
workingtemplatefile.close()
"""

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

#get short title and initial (e.g. ['lzhl', '两只老虎'])
def getInitial(inputString):
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
with open('musicsrc.txt', 'r', encoding="utf-8") as in_file:
    lastLineIsName=False
    lastLineIsSrc=False
    for line in in_file:
        #pass if line is
        w=""
        if "#" in line.strip():
            pass
        elif "<" in line.strip():
            w="<br><hr>"+line.strip()
        elif (len(line.strip())==0):
            if lastLineIsSrc:
                w=tlist[7]+tlist[8]
            lastLineIsName=False
            lastLineIsSrc=False
        #append if line does not contain extension of codec
        elif not(any(e in line.strip() for e in codeclist)):
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
out = out + ww

namelist.sort(key = lambda x: x[0])
#print(namelist)

#make head
hd=head+"<header><b>目录（拼音首字母排序）:</b><br>"
for i in namelist:
    hd=hd+" | <a href=\"#" + i[0] + "\">" + i[1]+"</a>"
hd=hd+" |</header>"

#add heat to body, then add footer
out=hd+"""<br><a href="all" style="color:red;">完整歌单</a>""" + out
out=out+15*"<br>"+"<footer>如音频无法播放代表文件源已阵亡。请到<a href=\"https://github.com/Nathan903/WorshipDrumScores/issues\"style=\"color:red;\">这里</a>提交问题以帮助页面改进"
out=out +"  <br>last updated " + str(datetime.datetime.now())+"</footer>"
out=htmlmin.minify(out+"</html>", remove_empty_space=True)
outputfile.write(out)
outputfile.close()

