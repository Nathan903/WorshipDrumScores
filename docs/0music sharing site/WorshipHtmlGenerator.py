import mytxt
from mytxt import getInitial, rp
import datetime
import htmlmin

#might need updates
listsrc='weworshipshh_src.txt'
outputfile_name ="allpage.html"
otitle = "教会全歌单（简体）"



listsrc='musicsrc.txt'
outputfile_name ="index.html"
otitle = "自由赞美 streaming"




codeclist = ["mp3","m4a", "ogg"]

#outputfile_name =input("name for output HTML file: ") + ".html"
template = mytxt.template

outputfile = open(outputfile_name,"w", encoding="utf-8")
outputfile.write("")
outputfile.close()


tlist = template.split("$")
for i in range(len(tlist)):
    tlist[i]=(tlist[i][1:])

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
function hide(){var e,t,n,a;for(e=document.getElementById("myInput").value.toUpperCase().replace(/\s+/g,""),t=document.getElementById("myTable").getElementsByTagName("p"),a=0;a<t.length;a++)(n=t[a])&&((n.id+"|"+n.className+"|"+n.textContent||n.innerText).toUpperCase().replace(/\s+/g,"").indexOf(e)>-1?t[a].style.display="":t[a].style.display="none")}function r(){document.getElementById("myInput").value="",hide()}if(location.href.includes("?")){var u=new URL(window.location.href).searchParams.get("search");document.getElementById("myInput").value=u,hide(),document.title=document.getElementById(u).getElementsByTagName("a")[0].textContent}
</script>
"""

"""function hide() {
  var input, filter, table, tr, p, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase().replace(/\s+/g, '');
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("p");

  for (i = 0; i < tr.length; i++) {
    p = tr[i];
    if (p) {
  txtValue = p.id+"|"+p.className+"|"+p.textContent || p.innerText;
  if (txtValue.toUpperCase().replace(/\s+/g, '').indexOf(filter)>-1) {
    tr[i].style.display = "";}
  else {tr[i].style.display = "none";}
  }
  }
}
function r() {
    document.getElementById("myInput").value=""
    hide()}
    
if(location.href.includes("?"))
{
    var u = new URL(window.location.href).searchParams.get("search");
    document.getElementById("myInput").value = u;
    hide();
    document.title = document.getElementById(u).getElementsByTagName("a")[0].textContent
}



document.getElementById("myInput").value = location.href.substring(location.href.indexOf("?")+1);
"""

#make output file
outputfile = open(outputfile_name,"a+",encoding="utf-8")


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
                w=tlist[8]+tlist[9]
            lastLineIsName=False
            lastLineIsSrc=False
        #append if line does not contain extension of codec
        elif not(any(e in line.strip() for e in codeclist) or "http" in line.strip()):
            w=tlist[0]+getInitial(line.strip())[0]+tlist[1]+getInitial(line.strip())[2]+tlist[2]+getInitial(line.strip())[0]+tlist[3]+line.strip()+tlist[4]
            namelist.append(getInitial(line.strip()))
            if lastLineIsSrc:
                w=tlist[8]+w
            lastLineIsName=True
            lastLineIsSrc=False
        else:
            w=tlist[6]+line.strip()+tlist[7]
            if lastLineIsName:
                w=tlist[5]+w
            lastLineIsName=False
            lastLineIsSrc=True
        ww=ww+w
    if lastLineIsSrc:
        ww=ww+tlist[8]+tlist[9]
out = out + """<div id="myTable">"""+ww+"</div>"

namelist.sort(key = lambda x: x[0])
#print(namelist)

#make head
tableofcontent="<hr><br><b>目录（拼音首字母排序）:</b><br>"
hd=mytxt.head(otitle,"")
for i in namelist:
    tableofcontent+=""" | <a onclick="r()" href="#""" + i[0] + "\">" + i[1]+"</a>"
tableofcontent+=" |"
hd+="""<br><input type="text" id="myInput" onkeyup="hide()" placeholder="输入拼音/首字母/中文，按enter搜索 （例：拣选 / jx / jianxuan）" title="Type in a name">"""

#add heat to body, then add footer
out=hd+out+tableofcontent+mytxt.foot+str(datetime.datetime.now())
out=htmlmin.minify(out+searchscript+"</html>", remove_empty_space=True)
outputfile.write(out)
outputfile.close()


