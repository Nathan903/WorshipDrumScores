def head(title,h1=""):
	extra=""
	if any(map(str.isdigit, title)):
		extra = """ | <a href="/" style="color:red;">主页</a>"""
	if not("自由赞美" in title):
		extra = """ | <a href="/" style="color:red;">主页</a>"""
	return ("""
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>"""+title+"""</title>
		<font color="white">  
		<body style="background-color:#282923;">
		<style>a:link { color:#edecdd; } a:visited{ color:#FF7597; } 
		</style>
		<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101316586);</script>
		<script async src="//static.getclicky.com/js"></script>
	</head>
<script>
	function myFunction() {
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("div");

	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("a")[0];
	    if (td) {
	      txtValue = td.textContent || td.innerText;
	      if (txtValue.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }       
	  }
	}
</script>
	"""+h1+"""
	<a href="/all" style="color:red;">曲库</a> | 
	<a href="https://github.com/Nathan903/WorshipDrumScores/" style="color:red;">鼓谱</a> | 
	<a href="/pa" style="color:red;">音控</a> | 
	<a href="/blog" style="color:red;">报刊</a> | 
	<a href="/about" style="color:red;">关于</a>
	"""+extra+"""
	<br><br>
	<body>
	<b>目录（拼音首字母排序）:</b><br>
""")

foot=("""
<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101311893);</script>
<script async src="//static.getclicky.com/js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101311893ns.gif" /></p></noscript>
<script data-goatcounter="https://meh.goatcounter.com/count"
        async src="//gc.zgo.at/count.js"></script>

</body><br>
<br><br>
<br>
如音频无法播放代表文件源已阵亡。请到<a href="https://github.com/Nathan903/WorshipDrumScores/issues"style="color:red;">这里</a>提交问题以帮助页面改进
<br>
last updated """)


template= ("""0<div><p id="$1"><a href="#$1">$2</a></p>
$3<audio controls loop controlsList="nodownload" preload="none" style="width: 90%;">$4<source src="$5" type="audio/mpeg">$6404</audio>
$7<br></div>
""")
template1= ("""0<p id="$1"><a href="#$1">$2</a></p>
$3<audio controls loop controlsList="nodownload" preload="auto" style="width: 90%;">$4<source src="$5" type="audio/mpeg">$6404</audio>
$7<br>
""")

nav = ("""

""")
