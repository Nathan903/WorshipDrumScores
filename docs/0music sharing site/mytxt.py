from langconv import Converter
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


def head(title,h1="", scorelink=""):
    navbar=""
    if ("自由赞美" in title):
    	navbar = """<a href="//github.com/Nathan903/WorshipDrumScores/">鼓谱</a> | 
    	<a href="/pa">音控</a> | 
    	<a href="/blog">报刊</a> |
    	<a href="/about">关于</a>
    	"""
    elif any(map(str.isdigit, title)):
    	navbar = """<a href="/">主页</a> | <a href=" """+scorelink+""" "style="color:#00ffff;">简谱</a>"""
    else:
        navbar = """<a href="//github.com/Nathan903/WorshipDrumScores/">鼓谱</a> | 
        <a href="/pa">音控</a> | 
        <a href="/blog">报刊</a> |
        <a href="/about">关于</a> |
        <a href="/">主页</a>"""
    return ("""
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>"""+title+"""</title>
		<style>body{background-color:#282923}a:link{color:#edecdd}a:visited{color:#ff7597}nav a:link,nav a:visited{color:red;}*{color:#fff}audio{width:90%;height:40px;margin:5 auto}</style>
	</head>

	"""+h1+"""

	<nav>
		<a href="/all">曲库</a> | 
		"""+navbar+"""
	</nav>
	<body>
""")

foot=("""

        <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101311893);</script>
        <script async src="/js/js.js"></script>
        <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101311893ns.gif" /></p></noscript>
    </body>

    <script data-goatcounter="https://meh.goatcounter.com/count" async src="/js/count.js"></script>

    <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101316586);</script>
    <script async src="//static.getclicky.com/js"></script>
<br>
<br>
<br>
<br>
如音频无法播放代表文件源已阵亡。请到<a href="https://github.com/Nathan903/WorshipDrumScores/issues"style="color:red;">这里</a>提交问题以帮助页面改进
<br>
last updated """+str(datetime.datetime.now())+"""
<link rel="dns-prefetch" href="https://god7777777.com/">
</html>""")

template= ("""0<p id="$1" class="$2"><a href="?search=$3">$4</a><br>
$5<audio controls loop controlsList="nodownload" preload="none">$6<source src="$7" type="audio/mpeg">$8404</audio>
$9</p>
""")
template1= ("""0<p id="$1"><a href="#$1">$2</a></p>
$3<audio controls loop controlsList="nodownload" preload="auto" style="width: 90%;">$4<source src="$5" type="audio/mpeg">$6404</audio>
$7<br>
""")
templatedev= ("""0<p id="$1" class="$2"><a href="?search=$3">$4</a><br>
$5<audio controls loop controlsList="nodownload" preload="auto">$6<source src="$7" type="audio/mpeg">$8404</audio>
$9</p>
""")

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
        return ([strip_emoji("".join(i[0] for i in pinyin(l, style=Style.FIRST_LETTER, strict=False, errors='ignore'))), l, classl])
    else:
        l1 = inputString.split("(")
        l11 = l1[0].split("（")
        l = l11[0].translate(str.maketrans('','',string.punctuation))
        l = l.translate(str.maketrans('','',zhon.hanzi.punctuation))
        classl=""
        if "\\" in inputString:
            classl+="\\"
        return ([strip_emoji(l.replace(" ","").lower()), l, classl])

def minifyjs(fname):
    import requests
    url = 'https://javascript-minifier.com/raw'
    data = {'input': open(fname, 'rb').read()}
    response = requests.post(url, data=data)
    return "<script>" + response.text +"</script>"