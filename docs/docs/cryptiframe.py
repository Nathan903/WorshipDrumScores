#curl -X POST -s --fail --compressed --data-urlencode "code@index.html" --output "index.html" https://htmlcompressor.com/compress
#curl -X POST -s --data-urlencode "code=<script> alert( 1 ); </script>" https://htmlcompressor.com/compress
#curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, World!"}' https://hooks.slack.com/services/asdfasdfasdf
import htmlmin
from pagecrypt import pagecrypt

title = input("input title（报告文档）: ")
passwd = input("input passwd: ")
hint = input("hint（为啥歌的英文名（小写）: ")
link = input("input link: ")
outputname=input('output file name: ')+".html"
if outputname==".html":
	outputname="index.html"
if link =="":
    link = "https://www.taobao.com/"
if title=="":
    title = "报告文档"
if hint=="":
    hint = "为啥歌的英文名（小写）"
    
f=open("template/minified.html","r", encoding="utf-8")
clear=f.read().replace("####", title).replace("$$$$",link)
f.close()
clear=htmlmin.minify(clear, remove_empty_space=True).encode('utf-8')



def compresshtml(s):
    import requests
    data = {'code': s}
    response = requests.post('https://htmlcompressor.com/compress', data=data)
    return (response.text)


ww=pagecrypt(clear,passwd).replace("####", title).replace("$$$$",hint)
ww=htmlmin.minify(compresshtml(ww), remove_empty_space=True)
w=open(outputname, 'w',encoding="utf-8")
w.write(ww)
w.close()
#print(compresshtml())
"""s



c=s+compresshtml(fname).split("</footer>")[1]
"""

