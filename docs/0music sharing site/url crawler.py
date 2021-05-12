import fileinput


from urllib.request import quote, unquote
def toChinese(s):
    return unquote(s, encoding='utf-8')
def toUrl(s):
    return quote(s, safe=";/?:@&=+$,", encoding="utf-8")
"""
url = "测试"
res1 = quote(url, safe=";/?:@&=+$,", encoding="utf-8")
print(res1)

print(toChinese("%E4%BB%80%E4%B9%88%E7%B2%89"))
"""

#victim:https://weworshipshh.com/main.php?go=home&key_name=&key_name_len=0
page = "main.php"#"總目錄.html"
#https://weworshipshh.com//mp3/02_HJ_%E5%9B%9E%E5%AE%B6.mp3
songlist = []
lbak = []
t=[]
i=0
with open(page,'r',encoding="utf8") as f:
    for l in f:
        if ("<td align=\"left\">"==l[8:25]):
            s=l.split(">")[1].split("<")[0]
            t.append(s)
            while s[0:1].isdigit():
                s = s[1:]
            lbak.append(s)
        if (".mp3" in l) and not("./mp3_player.php?" in l):
            a=l.split("\"")[1]
            songlist.append([lbak[-1],a])
        i+=1
#print(songlist)

#find all striped numbers for debug
"""
for i in range(len(lbak)):
    if lbak[i] in t[i]:
        t[i]=t[i].replace(lbak[i],'')
print(t)
"""
print(songlist[-1])
f = open('weworshipshh_src.txt','a',encoding="utf8")
for a in songlist:
    f.write(a[0]+"\n")
    f.write(toUrl("https://weworshipshh.com/"+a[1][1:]))
    f.write(2*"\n")
f.close()
