import htmlmin
f=open('encrypted.html','r',encoding='utf-8')
g=open('all.html','w',encoding='utf-8')
g.write(htmlmin.minify(str(f.read()), remove_empty_space=True).replace("    ","").replace("\n",""))
g.close()
f.close()
