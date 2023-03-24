from zhconv import convert
import sys
import os
import fileinput
import random
import time
import datetime
import string
from pypinyin import Style, pinyin, lazy_pinyin
import zhon.hanzi
import re


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



def rp(filename, text_to_search, replacement_text):
    with fileinput.FileInput(filename, inplace=True, backup='.bak') as file:
        for line in file:
            print(line.replace(text_to_search, replacement_text), end='')

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

        classl=strip_emoji("".join(lazy_pinyin(l, strict=False, errors='ignore')))
        if "\\" in inputString:
            classl+="\\"
        return ([strip_emoji("".join(i[0] for i in pinyin(l, style=Style.FIRST_LETTER, strict=False, errors='ignore'))), l, classl])[:2]
    else:
        l1 = inputString.split("(")
        l11 = l1[0].split("（")
        l = l11[0].translate(str.maketrans('','',string.punctuation))
        l = l.translate(str.maketrans('','',zhon.hanzi.punctuation))
        classl=""
        if "\\" in inputString:
            classl+="\\"
        return ([strip_emoji(l.replace(" ","").lower()), l, classl])[:2]
import os
import shutil

for file in os.listdir(os.getcwd()):
    if file.endswith(".mp3"):
        name = file.split("_")[0].strip(".mp3")
        fname, songname = getInitial(name)
        fname += ".mp3"
        p = f"{songname}\n/mp3/{fname}\n"
        print(p)
        os.rename(file, fname)

