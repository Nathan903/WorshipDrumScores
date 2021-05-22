#curl -X POST -s --fail --compressed --data-urlencode "code@index.html" --output "index.html" https://htmlcompressor.com/compress
#curl -X POST -s --data-urlencode "code=<script> alert( 1 ); </script>" https://htmlcompressor.com/compress
#curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, World!"}' https://hooks.slack.com/services/asdfasdfasdf
import htmlmin
from pagecrypt import pagecrypt
pagecrypt('0000.html','333')
"""
title = input("input title: ")
if title=="":
    title = "报告文档"
f=open("template/minified.html","r", encoding="utf-8")
s=f.read().replace("####", title).replace("$$$$",input("input link: "))
f.close()
print("\n")
print(htmlmin.minify(s, remove_empty_space=True))
print("\n")


fname='temp.html'
def compresshtml(fname):
    import requests
    data = {'code': open(fname, 'rb').read()}
    response = requests.post('https://htmlcompressor.com/compress', data=data)
    return (response.text)

hint = input("hint: ")
if hint=="":
    hint = "为啥歌的英文名（小写）"

t=open("template/encrypted head.html","r", encoding="utf-8")
s=t.read().replace("####", title).replace("$$$$", hint)
t.close()


c=s+compresshtml(fname).split("</footer>")[1]
w=open('temp.html', 'w',encoding="utf-8")

w.write(c)
w.close()"""

