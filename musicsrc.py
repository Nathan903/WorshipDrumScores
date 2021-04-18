import fileinput
import random
import time
from pypinyin import Style, pinyin
#might need updates
codeclist = ["mp3","m4a", "ogg"]
templatefilename = "musictemplate.html"
name_placeholder ="#name#"
src_placeholder ="#src#"
outputfile_name ="worship.html"

#read template
f=open(templatefilename, "r")
template = str(f.read())
f.close()

tlist = template.split("$")
for i in range(len(tlist)):
    tlist[i]=(tlist[i][1:])
print(tlist)

#make working template file
"""
workingtemplatefilename="workingtemplatefile_"#+str(time.time())
workingtemplatefile = open(workingtemplatefilename,"a")
workingtemplatefile.write(template)
workingtemplatefile.close()
"""

#make output file
outputfile = open(outputfile_name,"a+")

#get initial for chinese e.g. 两只老虎 --> lzlh
def getInitial(inputString):
    return ("".join(i[0] for i in pinyin(inputString, style=Style.INITIALS, strict=False)) )

def rp(filename, text_to_search, replacement_text):
    with fileinput.FileInput(filename, inplace=True, backup='.bak') as file:
        for line in file:
            print(line.replace(text_to_search, replacement_text), end='')
    

with open('musicsrc.txt', 'r', encoding="utf8") as in_file:
    lastLineIsName=False
    lastLineIsSrc=False
    for line in in_file:
        
        #pass if line is empty
        if (len(line.strip())<=1):
            w=tlist[7]
            if lastLineIsSrc:
                w=tlist[6]+w
            lastLineIsName=False
            lastLineIsSrc=False
        #append if line does not contain extension of codec
        elif not(any(e in line.strip() for e in codeclist)):
            w=tlist[0]+getInitial(line.strip())+tlist[1]+line.strip()+tlist[2]
            if lastLineIsSrc:
                w=tlist[6]+w
            lastLineIsName=True
            lastLineIsSrc=False
        else:
            w=tlist[4]+line.strip()+tlist[5]
            if lastLineIsName:
                w=tlist[3]+w
            lastLineIsName=False
            lastLineIsSrc=True
        outputfile.write(w)

outputfile.write(tlist[1])
outputfile.close()


