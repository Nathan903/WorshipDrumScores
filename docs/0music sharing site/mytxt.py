def head(title,h1=""):
	frontpage=""
	if any(map(str.isdigit, title)):
		frontpage = """ | <a href="/">主页</a>"""
	if not("自由赞美" in title):
		frontpage = """ | <a href="/">主页</a>"""
	return ("""
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>"""+title+"""</title>
		<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101316586);</script>
		<script async src="/js/js.js"></script>
		<style>body{background-color:#282923}a:link{color:#edecdd}a:visited{color:#ff7597}nav a:link{color:red;filter:hue-rotate()}*{color:#fff}audio{width:90%;height:40px;margin:5 auto}</style>
	</head>

	"""+h1+"""

	<nav>
		<a href="/all">曲库</a> | 
		<a href="//github.com/Nathan903/WorshipDrumScores/">鼓谱</a> | 
		<a href="/pa">音控</a> | 
		<a href="/blog">报刊</a> | 
		<a href="/about">关于</a>
		"""+frontpage+"""
	</nav>
	<body>
""")

foot=("""
<script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101311893);</script>
<script async src="/js/js.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101311893ns.gif" /></p></noscript>
<script data-goatcounter="https://meh.goatcounter.com/count"
        async src="/js/count.js"></script>

</body><br>
<br><br>
<br>
如音频无法播放代表文件源已阵亡。请到<a href="https://github.com/Nathan903/WorshipDrumScores/issues"style="color:red;">这里</a>提交问题以帮助页面改进
<br>
last updated """)


template= ("""0<p id="$1"><a href="#$1">$2</a><br>
$3<audio controls loop controlsList="nodownload" preload="none">$4<source src="$5" type="audio/mpeg">$6404</audio>
$7</p>
""")
template1= ("""0<p id="$1"><a href="#$1">$2</a></p>
$3<audio controls loop controlsList="nodownload" preload="auto" style="width: 90%;">$4<source src="$5" type="audio/mpeg">$6404</audio>
$7<br>
""")

nav = ("""

""")
