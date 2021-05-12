<!DOCTYPE html>
<html dir="ltr">
<head>
    
	<script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script type="text/javascript" src="./assets/js/jquery.js?1.0.3639"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./assets/css/bootstrap.css?1.0.3639" media="screen" />
<script type="text/javascript" src="./assets/js/bootstrap.min.js?1.0.3639"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" href="./assets/css/layout.ie.css?1.0.3639">
<script src="./assets/js/layout.ie.js?1.0.3639"></script>
<![endif]-->
<script type="text/javascript" src="./assets/js/layout.core.js"></script>
<script src="./assets/js/CloudZoom.js?1.0.3639"></script>
	
    <title>總目錄</title>
	<link rel="stylesheet" href="./assets/css/style.css?1.0.3639">
	<script src="./assets/js/script.js?1.0.3639"></script>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style/jquery.autocomplete.css" />
<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./js/jquery-ui-1.8.7.custom.min.js"></script>
<script type="text/javascript" src="./js/jquery.autocomplete.js"></script>   
<link rel="stylesheet" type="text/css" href="./css/jquery-ui-1.8.21.custom.css" />     
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css" />   
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function logout()
{
  swal({
    title: "確定登出?",
    text: '',
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      location.href = 'index.php?option=logout';
    }
  });
}
//-->
</script>     
</head>
<body class=" bootstrap bd-body-1 bd-homepage bd-pagebackground-126 bd-margins">
<header class=" bd-headerarea-1 bd-margins">
        <div data-affix data-offset="" data-fix-at-screen="top" data-clip-at-control="top" data-enable-lg data-enable-md data-enable-sm class="bd-affix-4 bd-no-margins bd-margins ">
	 <div class=" bd-layoutbox-3 bd-page-width   bd-no-margins clearfix">
    <div class="bd-container-inner">
        <a href="?go=home" class="bd-linkbutton-29  bd-button-614  bd-own-margins bd-content-element">主領班表管理</a>
    
    <nav class=" bd-hmenu-3"  data-responsive-menu="true" data-responsive-levels="expand on click" data-responsive-type="" data-offcanvas-delay="0ms" data-offcanvas-duration="700ms" data-offcanvas-timing-function="ease">
        
            <div class=" bd-menuoverlay-24 bd-menu-overlay"></div>
            <div class=" bd-responsivemenu-2 collapse-button">
    <div class="bd-container-inner">
        <div class="bd-menuitem-33 ">
            <a  data-toggle="collapse" data-target=".bd-hmenu-3 .collapse-button + .navbar-collapse" href="#" onclick="return false;"><span>Menu</span></a>
        </div>
    </div>
</div>
            <div class="navbar-collapse collapse ">
            
            <div class=" bd-horizontalmenu-4 clearfix">
                <div class="bd-container-inner">
                  <ul class=" bd-menu-9 nav nav-pills nav-justified">  

    <li class=" bd-menuitem-28 bd-toplevel-item">
    <a class="active" href="?go=home">總目錄</a>
    </li>
  
    <li class=" bd-menuitem-28 bd-toplevel-item">
    <a  href="?go=leader">主領班表</a>
    </li>
  
    <li class=" bd-menuitem-28 bd-toplevel-item">
    <a  href="?go=users">帳戶管理</a>
    </li>
                      
                    <li class=" bd-menuitem-28 bd-toplevel-item">
                    <a href="javascript:void(0);" onclick="logout()">登出</a>
                    </li>
                  </ul>
                </div>
            </div>
            
            <div class="bd-menu-close-icon">
    <a href="#" class="bd-icon  bd-icon-167"></a>
</div>
        
            </div>
    </nav>
    </div>
</div>
</div>
</header>
<script Language="JavaScript"> 
$().ready(function() 
{
  $("#key_name").autocomplete("music_name_search.php", {
		width: 200,
		selectFirst: false,
		max: 30	});
  
  $("#key_name").result(function(event, data, formatted) {
		if (data)
			$(this).parent().next().find("input").val(data[1]);
	});
  
	
	$("#clear").click(function() {
		$(":input").unautocomplete();
	});
})
</script> 
<script Language="JavaScript">
<!--
function chkInput()
{
  return true; 
  
  var key_name=document.form_home.key_name.value;

	if (key_name.length == 0)  
	{
    swal("Oops!", "請輸入查詢條件!", "error");
		return false;  
	}
}

function clearInput()
{
  document.form_home.key_name.value = "";
  return false;  
}

function reload_page()
{
  location.reload();
}

function del_data(id, name)
{
  swal({
    title: "確定刪除此資料?",
    text: name,
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      var url = '?go=home&key_name=&key_name_len=&op=d' + '&id=' + id;
      location.href = url;
    }
  });
}
--></script>   
<div class=" bd-stretchtobottom-3 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-1">
<div class="bd-contentlayout-1 bd-page-width   bd-no-margins bd-sheetstyles   bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-no-margins">
            
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    

                    <div class=" bd-layoutitemsbox-1 bd-no-margins bd-flex-wide bd-margins">
    <div class=" bd-content-13">
    
    <div class=" bd-htmlcontent-5 bd-margins" 
 data-page-id="page.102">
    <section class=" bd-section-17 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed " id="section15" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-25 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-middle">
                <div class=" bd-columnwrapper-50 
 col-lg-6
 col-md-8
 col-sm-6">
    <div class="bd-layoutcolumn-50 bd-column" ><div class="bd-vertical-align-wrapper"><h3 class=" bd-textblock-4 bd-no-margins bd-content-element">
    總目錄
</h3></div></div>
</div>
	
		<div class=" bd-columnwrapper-48 
 col-lg-6
 col-md-4
 col-sm-6">
    <div class="bd-layoutcolumn-48 bd-column" ><div class="bd-vertical-align-wrapper">
        
</div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
	
		<div class=" bd-customhtml-16 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed ">
    <div class="bd-container-inner bd-content-element">
        
    </div>
</div>
	
		<section class=" bd-section-16 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed " id="section12" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <form class=" bd-form-10 bd-page-width  form-inline"  autocomplete="off" action="?go=home" id="form_home"  name="form_home" method="post" onSubmit="return chkInput()">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class=" bd-layoutcontainer-20 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row 
 bd-row-flex 
 bd-row-align-middle">
                <div class=" bd-columnwrapper-37 
 col-sm-12">
    <div class="bd-layoutcolumn-37 bd-column" ><div class="bd-vertical-align-wrapper"><div class=" bd-input-3 form-group">
    <label class="bd-form-label">搜尋</label>
    

    <input type="text" class="bd-form-input" id="key_name" name="key_name" value=""
 placeholder="輸入關鍵字" >

    
</div>
	
    <input type="submit" value="查詢" class="bd-linkbutton-16 bd-no-margins  bd-button-601  bd-own-margins bd-content-element">
	  <input type="button" value="重設" onclick="clearInput()" class="bd-linkbutton-14  bd-button-593  bd-own-margins bd-content-element">
</div></div>
</div>
            </div>
        </div>
    </div>
</div>
        </div>
</form>
    </div>
    </div>
</section>
	
		<section class=" bd-section-15 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed " id="section38" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-customhtml-15 bd-page-width bd-tagstyles bd-custom-bulletlist bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed ">
    <div class="bd-container-inner bd-content-element">
        <nav>
  <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
  <ul class="pagination">

    <li class="active"><a href="?go=home&key_name=&key_name_len=0" draggable="false">檢索字數(全部)</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=1" draggable="false">1</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=2" draggable="false">2</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=3" draggable="false">3</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=4" draggable="false">4</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=5" draggable="false">5</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=6" draggable="false">6</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=7" draggable="false">7</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=8" draggable="false">8</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=9" draggable="false">9</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=10" draggable="false">10</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=11" draggable="false">11</a></li>
  
    <li ><a href="?go=home&key_name=&key_name_len=12" draggable="false">12</a></li>
  
  <li ><a href="?go=home&key_name=&key_name_len=13" draggable="false">1E</a></li>
    
  </ul>
</nav>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-19 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed " id="section38" data-section-title="Section" style="position: fixed; top: 200px; z-index: 1;">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-customhtml-36 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed ">
    <div class="bd-container-inner bd-content-element">
       

<!-- <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" draggable="false">×</a>
    <iframe src="mp3_player.php" id="mp3_player" name="mp3_player" height="50px" frameborder="0" scrolling="no"></iframe>
</div> -->

<div class="bd-container-inner bd-content-element">
<iframe src="mp3_player.php" id="mp3_player" name="mp3_player" height="50px" frameborder="0" scrolling="no"></iframe>
</div>

    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-14 bd-page-width bd-tagstyles bd-custom-table " id="section34" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-customhtml-13 bd-page-width bd-tagstyles bd-custom-bulletlist bd-custom-table bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed ">
    <div class="bd-container-inner bd-content-element">
    
<table class="table table-hover" style="background-color: rgb(255, 255, 255); text-align: center;">
  <thead>
    <tr>
      <th colspan="8" class="text-center">&nbsp;</th>
      <th colspan="10" class="text-center">建議歌序</th>
      <th colspan="7" class="text-center">使用次數</th>
    </tr>
    <tr>
      <th class="text-center">操作</th>
      <!-- <th class="text-center">序號</th> -->
      <th class="text-center">檢索碼</th>
      <th class="text-center">字數</th>
      <th class="text-center">歌名</th>
	  <th class="text-center">PPT</th>
      <th class="text-center">有譜</th>
      <th class="text-center">MP3</th>
      <th class="text-center">MP4</th>	  

      <th class="text-center">1</th>
    
      <th class="text-center">2</th>
    
      <th class="text-center">3</th>
    
      <th class="text-center">4</th>
    
      <th class="text-center">5</th>
    
      <th class="text-center">6</th>
    
      <th class="text-center">7</th>
    
      <th class="text-center">8</th>
    
      <th class="text-center">9</th>
    
    <th class="text-center">特</th>
  
  <th class="text-center">總計</th>

    <th class="text-center">2016</th>
  
    <th class="text-center">2017</th>
  
    <th class="text-center">2018</th>
  
    <th class="text-center">2019</th>
  
    <th class="text-center">2020</th>
  
    <th class="text-center">2021</th>
        
    </tr>
  </thead>
  <tbody>

      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">346</td> -->
        <td align="center">01_Q</td>
        <td align="center">1</td>
        <td align="left">求</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/求.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=求.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/求.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">1</td> -->
        <td align="center">02AJ</td>
        <td align="center">2</td>
        <td align="left">安靜</td>
    
        <td align="center">
          <a href="./ppt/02_AJ_安靜-新的事将要成就.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 安靜 約書亞(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_AJ_安靜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_AJ_安靜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">2</td> -->
        <td align="center">02AM</td>
        <td align="center">2</td>
        <td align="left">奥秘</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02_AM_奧秘.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_AM_奥秘.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_AM_奥秘.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">3</td> -->
        <td align="center">02EG</td>
        <td align="center">2</td>
        <td align="left">恩膏</td>
    
        <td align="center">
          <a href="./ppt/E-恩膏.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_EG_恩膏.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_EG_恩膏.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_EG_恩膏.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">4</td> -->
        <td align="center">02HJ</td>
        <td align="center">2</td>
        <td align="left">回家</td>
    
        <td align="center">
          <a href="./ppt/H-回家.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_HJ_回家.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_HJ_回家.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_HJ_回家.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">5</td> -->
        <td align="center">02HJ</td>
        <td align="center">2</td>
        <td align="left">活祭</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 活祭.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 活祭.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 活祭.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">6</td> -->
        <td align="center">02JX</td>
        <td align="center">2</td>
        <td align="left">揀選</td>
    
        <td align="center">
          <a href="./ppt/J-揀選.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_JX_揀選.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_JX_揀選.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_JX_揀選.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">7</td> -->
        <td align="center">02QB</td>
        <td align="center">2</td>
        <td align="left">謙卑</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 謙卑.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_QB_謙卑.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_QB_謙卑.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">370</td> -->
        <td align="center">02QS</td>
        <td align="center">2</td>
        <td align="left">牽手</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/牽手.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=牽手.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/牽手.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">8</td> -->
        <td align="center">02RW</td>
        <td align="center">2</td>
        <td align="left">讓我</td>
    
        <td align="center">
          <a href="./ppt/R-讓我.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_RW_讓我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_RW_讓我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_RW_讓我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">9</td> -->
        <td align="center">02SA</td>
        <td align="center">2</td>
        <td align="left">是愛</td>
    
        <td align="center">
          <a href="./ppt/S-是愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_SA_是愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">358</td> -->
        <td align="center">02SC</td>
        <td align="center">2</td>
        <td align="left">聖城</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/聖城.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=聖城.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/聖城.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">10</td> -->
        <td align="center">02SM</td>
        <td align="center">2</td>
        <td align="left">使命</td>
    
        <td align="center">
          <a href="./ppt/S-使命.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_SM_使命.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_SM_使命.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_SM_使命.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">11</td> -->
        <td align="center">02SN</td>
        <td align="center">2</td>
        <td align="left">是祢</td>
    
        <td align="center">
          <a href="./ppt/S-是祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_SN_是祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_SN_是祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_SN_是祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">361</td> -->
        <td align="center">02SX</td>
        <td align="center">2</td>
        <td align="left">甦醒 Wake (演唱-璽恩)</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 甦醒 Wake (演唱-璽恩).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 甦醒 Wake (演唱-璽恩).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">12</td> -->
        <td align="center">02XJ</td>
        <td align="center">2</td>
        <td align="left">新酒(約書亞)</td>
    
        <td align="center">
          <a href="./ppt/X-新酒.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_XJ_新酒.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_XJ_新酒_約書亞.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_XJ_新酒_約書亞.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">13</td> -->
        <td align="center">02YG</td>
        <td align="center">2</td>
        <td align="left">眼光</td>
    
        <td align="center">
          <a href="./ppt/Y-眼光.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 眼光(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_YG_眼光.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_YG_眼光.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">14</td> -->
        <td align="center">02YK</td>
        <td align="center">2</td>
        <td align="left">倚靠</td>
    
        <td align="center">
          <a href="./ppt/Y-倚靠.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02_YK_倚靠.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02_YK_倚靠.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02_YK_倚靠.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">15</td> -->
        <td align="center">03AB</td>
        <td align="center">3</td>
        <td align="left">阿爸父</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_AB_阿爸父.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_AB_阿爸父.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_AB_阿爸父.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">16</td> -->
        <td align="center">03CM</td>
        <td align="center">3</td>
        <td align="left">充滿我</td>
    
        <td align="center">
          <a href="./ppt/C-充滿我.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_CM_充滿我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_CM_充滿我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_CM_充滿我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">374</td> -->
        <td align="center">03DS</td>
        <td align="center">3</td>
        <td align="left">釘十架 華商復活節</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 釘十架 華商復活節.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 釘十架 華商復活節.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">17</td> -->
        <td align="center">03GK</td>
        <td align="center">3</td>
        <td align="left">更靠近</td>
    
        <td align="center">
          <a href="./ppt/G-更靠近.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_GK_更靠近.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">18</td> -->
        <td align="center">03GX</td>
        <td align="center">3</td>
        <td align="left">感谢神</td>
    
        <td align="center">
          <a href="./ppt/G-感謝神.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_GX_感謝神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_GX_感谢神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_GX_感谢神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">19</td> -->
        <td align="center">03HC</td>
        <td align="center">3</td>
        <td align="left">活出爱</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_HC_活出愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_HC_活出爱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_HC_活出爱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">20</td> -->
        <td align="center">03HS</td>
        <td align="center">3</td>
        <td align="left">和散那(約書亞)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_HS_和撒那.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_HS_和散那_約書亞.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_HS_和散那_約書亞.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">21</td> -->
        <td align="center">03HS</td>
        <td align="center">3</td>
        <td align="left">和撒那</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_HS_和撒那.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_HS_和撒那.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_HS_和撒那.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">22</td> -->
        <td align="center">03HS</td>
        <td align="center">3</td>
        <td align="left">和撒那(撒拉弗敬拜團)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_HS_和撒那.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_HS_和撒那_撒拉弗敬拜團.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_HS_和撒那_撒拉弗敬拜團.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">23</td> -->
        <td align="center">03JB</td>
        <td align="center">3</td>
        <td align="left">敬拜祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_JB_敬拜祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_JB_敬拜祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_JB_敬拜祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">24</td> -->
        <td align="center">03JB</td>
        <td align="center">3</td>
        <td align="left">敬拜主</td>
    
        <td align="center">
          <a href="./ppt/J-敬拜主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_JB_敬拜主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_JB_敬拜主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_JB_敬拜主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">25</td> -->
        <td align="center">03LJ</td>
        <td align="center">3</td>
        <td align="left">煉凈我</td>
    
        <td align="center">
          <a href="./ppt/L-煉凈我.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_LJ_煉凈我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_LJ_煉凈我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_LJ_煉凈我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">26</td> -->
        <td align="center">03LQ</td>
        <td align="center">3</td>
        <td align="left">來慶賀</td>
    
        <td align="center">
          <a href="./ppt/L-來慶賀.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_LQ_來慶賀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_LQ_來慶賀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_LQ_來慶賀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">27</td> -->
        <td align="center">03MC</td>
        <td align="center">3</td>
        <td align="left">馬槽歌</td>
    
        <td align="center">
          <a href="./ppt/M-馬槽歌.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_MC_馬槽歌.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_MC_馬槽歌.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_MC_馬槽歌.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">28</td> -->
        <td align="center">03NB</td>
        <td align="center">3</td>
        <td align="left">能不能</td>
    
        <td align="center">
          <a href="./ppt/N-能不能.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_NB_能不能.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_NB_能不能.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_NB_能不能.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">29</td> -->
        <td align="center">03ND</td>
        <td align="center">3</td>
        <td align="left">祢的爱</td>
    
        <td align="center">
          <a href="./ppt/N-祢的愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 祢的愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 祢的爱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 祢的爱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">30</td> -->
        <td align="center">03NZ</td>
        <td align="center">3</td>
        <td align="left">祢真好</td>
    
        <td align="center">
          <a href="./ppt/N-祢真好.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 祢真好 You Are Good.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_NZ_祢真好.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_NZ_祢真好.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">31</td> -->
        <td align="center">03PA</td>
        <td align="center">3</td>
        <td align="left">平安夜</td>
    
        <td align="center">
          <a href="./ppt/平安夜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 平安夜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_PA_平安夜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_PA_平安夜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">327</td> -->
        <td align="center">03PA</td>
        <td align="center">3</td>
        <td align="left">平安夜_五線譜</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_PA_平安夜_(五線譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">32</td> -->
        <td align="center">03QQ</td>
        <td align="center">3</td>
        <td align="left">輕輕聽</td>
    
        <td align="center">
          <a href="./ppt/Q-輕輕聽.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_QQ_輕輕聽.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_QQ_輕輕聽.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_QQ_輕輕聽.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">34</td> -->
        <td align="center">03SG</td>
        <td align="center">3</td>
        <td align="left">神羔羊</td>
    
        <td align="center">
          <a href="./ppt/S-神羔羊-你配得至聖尊榮-因祂活著.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_SG_神羔羊.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_SG_神羔羊.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_SG_神羔羊.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">367</td> -->
        <td align="center">03SZ</td>
        <td align="center">3</td>
        <td align="left">十字架</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/十字架.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=十字架.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/十字架.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">33</td> -->
        <td align="center">03TK</td>
        <td align="center">3</td>
        <td align="left">天開了</td>
    
        <td align="center">
          <a href="./ppt/天開了.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_TK_天開了.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_TK_天開了.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_TK_天開了.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">35</td> -->
        <td align="center">03WY</td>
        <td align="center">3</td>
        <td align="left">惟有祢</td>
    
        <td align="center">
          <a href="./ppt/W-唯有祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_WY_惟有祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_WY_惟有祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_WY_惟有祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">36</td> -->
        <td align="center">03WZ</td>
        <td align="center">3</td>
        <td align="left">我在這</td>
    
        <td align="center">
          <a href="./ppt/W-我在這.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_WZ_我在這.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_WZ_我在這.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_WZ_我在這.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center"></td> -->
        <td align="center">03XX</td>
        <td align="center">3</td>
        <td align="left">謝謝祢</td>
    
        <td align="center">
          <a href="./ppt/謝謝祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_XX_謝謝祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">37</td> -->
        <td align="center">03YJ</td>
        <td align="center">3</td>
        <td align="left">遇見祢</td>
    
        <td align="center">
          <a href="./ppt/遇見祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_YJ_遇見祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">38</td> -->
        <td align="center">03ZB</td>
        <td align="center">3</td>
        <td align="left">主寶血</td>
    
        <td align="center">
          <a href="./ppt/z-主寶血.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_ZB_主寶血.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_ZB_主寶血.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_ZB_主寶血.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">39</td> -->
        <td align="center">03ZS</td>
        <td align="center">3</td>
        <td align="left">這世代</td>
    
        <td align="center">
          <a href="./ppt/Z-這世代.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03_ZS_這世代.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_ZS_這世代.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_ZS_這世代.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">40</td> -->
        <td align="center">03ZS</td>
        <td align="center">3</td>
        <td align="left">主雖然</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03_ZS_主雖然.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03_ZS_主雖然.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03_ZS_主雖然.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">41</td> -->
        <td align="center">03ZZ</td>
        <td align="center">3</td>
        <td align="left">在這裡</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 在這裡.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 在這裡.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 在這裡.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">42</td> -->
        <td align="center">04AJ</td>
        <td align="center">4</td>
        <td align="left">愛救了我</td>
    
        <td align="center">
          <a href="./ppt/愛救了我.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_AJ_愛救了我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_AJ_愛救了我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_AJ_愛救了我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">43</td> -->
        <td align="center">04AN</td>
        <td align="center">4</td>
        <td align="left">愛祢到底</td>
    
        <td align="center">
          <a href="./ppt/愛祢到底.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_AN_愛祢到底.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_AN_愛祢到底.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_AN_愛祢到底.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">44</td> -->
        <td align="center">04AW</td>
        <td align="center">4</td>
        <td align="left">愛我願意</td>
    
        <td align="center">
          <a href="./ppt/愛我願意(彩虹下的约定).pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_AW_愛我願意.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_AW_愛我願意.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_AW_愛我願意.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">45</td> -->
        <td align="center">04AZ</td>
        <td align="center">4</td>
        <td align="left">愛主更深</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_AZ_愛主更深.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_AZ_愛主更深.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_AZ_愛主更深.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">46</td> -->
        <td align="center">04BG</td>
        <td align="center">4</td>
        <td align="left">寶貴十架</td>
    
        <td align="center">
          <a href="./ppt/B-寶貴十架.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 寶貴十架.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_BG_寶貴十架.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_BG_寶貴十架.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">332</td> -->
        <td align="center">04CJ</td>
        <td align="center">4</td>
        <td align="left">純潔如金</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">47</td> -->
        <td align="center">04CX</td>
        <td align="center">4</td>
        <td align="left">從心合一</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_CX_從心合一.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_CX_從心合一.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_CX_從心合一.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">48</td> -->
        <td align="center">04DD</td>
        <td align="center">4</td>
        <td align="left">單單敬拜</td>
    
        <td align="center">
          <a href="./ppt/D-單單敬拜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_DD_單單敬拜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_DD_單單敬拜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_DD_單單敬拜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">49</td> -->
        <td align="center">04DG</td>
        <td align="center">4</td>
        <td align="left">禱告的殿</td>
    
        <td align="center">
          <a href="./ppt/D-禱告的殿.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_DG_禱告的殿.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_DG_禱告的殿(國_台).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_DG_禱告的殿(國_台).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">50</td> -->
        <td align="center">04DK</td>
        <td align="center">4</td>
        <td align="left">打開天窗</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 打開天窗(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_DK_打開天窗.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_DK_打開天窗.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">51</td> -->
        <td align="center">04ED</td>
        <td align="center">4</td>
        <td align="left">恩典之流</td>
    
        <td align="center">
          <a href="./ppt/E-恩典之流.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 恩典之流.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_ED_恩典之流.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_ED_恩典之流.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">52</td> -->
        <td align="center">04FP</td>
        <td align="center">4</td>
        <td align="left">返璞歸真</td>
    
        <td align="center">
          <a href="./ppt/F-返璞歸真.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_FP_返璞歸真.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_FP_返璞歸真.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_FP_返璞歸真.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">53</td> -->
        <td align="center">04FX</td>
        <td align="center">4</td>
        <td align="left">復興聖潔</td>
    
        <td align="center">
          <a href="./ppt/F-復興聖潔.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_FX_復興聖潔.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_FX_復興聖潔.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_FX_復興聖潔.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">54</td> -->
        <td align="center">04GS</td>
        <td align="center">4</td>
        <td align="left">更深之處</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_GS_更深之處.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">55</td> -->
        <td align="center">04HD</td>
        <td align="center">4</td>
        <td align="left">何等恩典</td>
    
        <td align="center">
          <a href="./ppt/H-何等恩典.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_HD_何等恩典.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_HD_何等恩典.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_HD_何等恩典.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">56</td> -->
        <td align="center">04HD</td>
        <td align="center">4</td>
        <td align="left">何等愛祢</td>
    
        <td align="center">
          <a href="./ppt/何等愛祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 何等愛祢(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_HD_何等愛祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_HD_何等愛祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">57</td> -->
        <td align="center">04HL</td>
        <td align="center">4</td>
        <td align="left">哈利路亞</td>
    
        <td align="center">
          <a href="./ppt/H-哈利路亞.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_HL_哈利路亞.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_HL_哈利路亞.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_HL_哈利路亞.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">58</td> -->
        <td align="center">04JB</td>
        <td align="center">4</td>
        <td align="left">敬拜的心</td>
    
        <td align="center">
          <a href="./ppt/敬拜的心.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_JB_敬拜的心.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JB_敬拜的心.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JB_敬拜的心.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">59</td> -->
        <td align="center">04JC</td>
        <td align="center">4</td>
        <td align="left">竭誠獻上</td>
    
        <td align="center">
          <a href="./ppt/竭誠獻上.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_JC_竭誠獻上.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JC_竭誠獻上.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JC_竭誠獻上.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">60</td> -->
        <td align="center">04JD</td>
        <td align="center">4</td>
        <td align="left">基督降生</td>
    
        <td align="center">
          <a href="./ppt/基督降生.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_JD_基督降生.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">312</td> -->
        <td align="center">04JD</td>
        <td align="center">4</td>
        <td align="left">基督降生(MIDI) _Soprano</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_JD_基督降生(四部和聲譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JD_基督降生(MIDI) _Soprano.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JD_基督降生(MIDI) _Soprano.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">313</td> -->
        <td align="center">04JD</td>
        <td align="center">4</td>
        <td align="left">基督降生(MIDI) _Alto</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_JD_基督降生(四部和聲譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JD_基督降生(MIDI) _Alto.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JD_基督降生(MIDI) _Alto.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">314</td> -->
        <td align="center">04JD</td>
        <td align="center">5</td>
        <td align="left">基督降生(MIDI) _Tenor</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_JD_基督降生(四部和聲譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JD_基督降生(MIDI) _Tenor.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JD_基督降生(MIDI) _Tenor.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">315</td> -->
        <td align="center">04JD</td>
        <td align="center">4</td>
        <td align="left">基督降生(MIDI) _Bass</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_JD_基督降生(四部和聲譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JD_基督降生(MIDI) _Bass.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JD_基督降生(MIDI) _Bass.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">62</td> -->
        <td align="center">04JJ</td>
        <td align="center">4</td>
        <td align="left">緊緊跟隨</td>
    
        <td align="center">
          <a href="./ppt/緊緊跟隨.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 緊緊跟隨.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 緊緊跟隨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 緊緊跟隨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">61</td> -->
        <td align="center">04JM</td>
        <td align="center">4</td>
        <td align="left">舉目仰望</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_JM_舉目仰望.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JM_舉目仰望.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JM_舉目仰望.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">63</td> -->
        <td align="center">04JT</td>
        <td align="center">4</td>
        <td align="left">將天敞開</td>
    
        <td align="center">
          <a href="./ppt/J-將天敞開.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 將天敞開(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JT_將天敞開.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JT_將天敞開.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">64</td> -->
        <td align="center">04JZ</td>
        <td align="center">4</td>
        <td align="left">就在這裡</td>
    
        <td align="center">
          <a href="./ppt/J-就在這裡.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_JZ_就在這裡.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_JZ_就在这里.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_JZ_就在这里.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">375</td> -->
        <td align="center">04JZ</td>
        <td align="center">4</td>
        <td align="left">近主十架 華商版</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 近主十架 華商版.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 近主十架 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 近主十架 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">65</td> -->
        <td align="center">04LD</td>
        <td align="center">4</td>
        <td align="left">立定心志</td>
    
        <td align="center">
          <a href="./ppt/L-立定心志.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_LD_立定心志.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_LD_立定心志.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_LD_立定心志.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">66</td> -->
        <td align="center">04LG</td>
        <td align="center">4</td>
        <td align="left">來高聲唱</td>
    
        <td align="center">
          <a href="./ppt/L-來高聲唱.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 來高聲唱(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 來高聲唱(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 來高聲唱(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">68</td> -->
        <td align="center">04LW</td>
        <td align="center">4</td>
        <td align="left">煉我愈精</td>
    
        <td align="center">
          <a href="./ppt/煉我愈精.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_LW_煉我愈精.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">69</td> -->
        <td align="center">04MD</td>
        <td align="center">4</td>
        <td align="left">命定之路</td>
    
        <td align="center">
          <a href="./ppt/命定之路.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_MD_命定之路.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_MD_命定之路.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_MD_命定之路.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">70</td> -->
        <td align="center">04MH</td>
        <td align="center">4</td>
        <td align="left">美好清晨</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_MH_美好清晨.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_MH_美好清晨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_MH_美好清晨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">71</td> -->
        <td align="center">04MY</td>
        <td align="center">4</td>
        <td align="left">滿有能力</td>
    
        <td align="center">
          <a href="./ppt/M-滿有能力.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 滿有能力(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 滿有能力(2).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 滿有能力(2).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">351</td> -->
        <td align="center">04ND</td>
        <td align="center">4</td>
        <td align="left">祢的香氣</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 祢的香氣.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 祢的香氣.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 祢的香氣.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">72</td> -->
        <td align="center">04NS</td>
        <td align="center">4</td>
        <td align="left">祢是配得</td>
    
        <td align="center">
          <a href="./ppt/N-祢是配得.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_NS_祢是配得.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_NS_祢是配得.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_NS_祢是配得.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">73</td> -->
        <td align="center">04NZ</td>
        <td align="center">4</td>
        <td align="left">祢真偉大</td>
    
        <td align="center">
          <a href="./ppt/N-祢真偉大.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_NZ_祢真偉大.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_NZ_祢真偉大.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_NZ_祢真偉大.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">74</td> -->
        <td align="center">04OZ</td>
        <td align="center">4</td>
        <td align="left">哦主發光</td>
    
        <td align="center">
          <a href="./ppt/O-哦!主發光.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_OZ_哦主發光.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_OZ_哦主發光.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_OZ_哦主發光.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">75</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰(組曲)</td>
    
        <td align="center">
          <a href="./ppt/P-普世歡騰.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_PS_普世歡騰_組曲.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">316</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰_(宇宙光版)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰_宇宙光版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰_宇宙光版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">317</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰_(百人大合唱)</td>
    
        <td align="center">
          <a href="./ppt/普世歡騰.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰_百人大合唱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰_百人大合唱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">318</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰(MIDI)_Soprano</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰(MIDI)_Soprano.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰(MIDI)_Soprano.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">319</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰(MIDI)_Alto</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰(MIDI)_Alto.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰(MIDI)_Alto.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">320</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰(MIDI)_Tenor</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰(MIDI)_Tenor.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰(MIDI)_Tenor.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">321</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰(MIDI)_Bass</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06 普世歡騰.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_PS_普世歡騰(MIDI)_Bass.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_PS_普世歡騰(MIDI)_Bass.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">328</td> -->
        <td align="center">04PS</td>
        <td align="center">4</td>
        <td align="left">普世歡騰_五線譜</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_PS_普世歡騰_(五線譜).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">76</td> -->
        <td align="center">04QL</td>
        <td align="center">4</td>
        <td align="left">齊來讚美</td>
    
        <td align="center">
          <a href="./ppt/Q-齊來讚美.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_QL_齊來讚美.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_QL_齊來讚美.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_QL_齊來讚美.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">77</td> -->
        <td align="center">04QM</td>
        <td align="center">4</td>
        <td align="left">奇妙真神</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_QM_奇妙真神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_QM_奇妙真神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_QM_奇妙真神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">78</td> -->
        <td align="center">04QR</td>
        <td align="center">4</td>
        <td align="left">全然為祢</td>
    
        <td align="center">
          <a href="./ppt/全然為祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_QR_全然為祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_QR_全然為祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_QR_全然為祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">79</td> -->
        <td align="center">04QX</td>
        <td align="center">4</td>
        <td align="left">全新的你</td>
    
        <td align="center">
          <a href="./ppt/Q-全新的你.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_QX_全新的你.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_QX_全新的你.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_QX_全新的你.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">80</td> -->
        <td align="center">04RR</td>
        <td align="center">4</td>
        <td align="left">日日夜夜</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_RR_日日夜夜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_RR_日日夜夜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_RR_日日夜夜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">81</td> -->
        <td align="center">04RS</td>
        <td align="center">4</td>
        <td align="left">人生的福</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_RS_人生的福.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_RS_人生的福.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_RS_人生的福.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">83</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">神的道路</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_SD_神的道路.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_神的道路.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_神的道路.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">84</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">神的應許</td>
    
        <td align="center">
          <a href="./ppt/S-神的應許.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_SD_神的應許.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">322</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">聖誕佳音(MIDI)_ Soprano</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_聖誕佳音(MIDI)_ Soprano.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_聖誕佳音(MIDI)_ Soprano.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">323</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">聖誕佳音(MIDI)_Alto</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_聖誕佳音(MIDI)_Alto.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_聖誕佳音(MIDI)_Alto.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">324</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">聖誕佳音(MIDI)_Tenor</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_聖誕佳音(MIDI)_Tenor.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_聖誕佳音(MIDI)_Tenor.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">325</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">聖誕佳音(MIDI)_Bass</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_聖誕佳音(MIDI)_Bass.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_聖誕佳音(MIDI)_Bass.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">326</td> -->
        <td align="center">04SD</td>
        <td align="center">4</td>
        <td align="left">聖誕佳音_四部和聲</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 聖誕佳音.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">85</td> -->
        <td align="center">04SJ</td>
        <td align="center">4</td>
        <td align="left">十架的愛</td>
    
        <td align="center">
          <a href="./ppt/S-十架的愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_SJ_十架的愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SJ_十架的愛.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SJ_十架的愛.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">86</td> -->
        <td align="center">04SJ</td>
        <td align="center">4</td>
        <td align="left">世界之光</td>
    
        <td align="center">
          <a href="./ppt/S-世界之光.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_SJ_世界之光.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SJ_世界之光.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SJ_世界之光.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">87</td> -->
        <td align="center">04SK</td>
        <td align="center">4</td>
        <td align="left">深刻的愛</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_SK_深刻的愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SK_深刻的爱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SK_深刻的爱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">88</td> -->
        <td align="center">04SS</td>
        <td align="center">4</td>
        <td align="left">深深愛祢</td>
    
        <td align="center">
          <a href="./ppt/S-深深愛祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_SS_深深愛祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SS_深深愛祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SS_深深愛祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">89</td> -->
        <td align="center">04WJ</td>
        <td align="center">4</td>
        <td align="left">無價至寶</td>
    
        <td align="center">
          <a href="./ppt/W-無價至寶.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WJ_無價至寶.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WJ_無價至寶.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WJ_無價至寶.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">90</td> -->
        <td align="center">04WJ</td>
        <td align="center">4</td>
        <td align="left">我敬拜祢</td>
    
        <td align="center">
          <a href="./ppt/W-我敬拜祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WJ_我敬拜祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WJ_我敬拜祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WJ_我敬拜祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">91</td> -->
        <td align="center">04WM</td>
        <td align="center">4</td>
        <td align="left">我們獻上</td>
    
        <td align="center">
          <a href="./ppt/我們獻上.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WM_我們獻上.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WM_我們獻上.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WM_我們獻上.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">297</td> -->
        <td align="center">04WM</td>
        <td align="center">4</td>
        <td align="left">我們呼求</td>
    
        <td align="center">
          <a href="./ppt/我們呼求.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 我們呼求(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 我們呼求(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 我們呼求(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">92</td> -->
        <td align="center">04WY</td>
        <td align="center">4</td>
        <td align="left">我要看見</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_WY_我要看見.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WY_我要看見.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WY_我要看見.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">93</td> -->
        <td align="center">04WY</td>
        <td align="center">4</td>
        <td align="left">唯有耶穌</td>
    
        <td align="center">
          <a href="./ppt/W-唯有耶稣.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 唯有耶穌(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WY_唯有耶穌.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WY_唯有耶穌.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">94</td> -->
        <td align="center">04WY</td>
        <td align="center">4</td>
        <td align="left">我要順服</td>
    
        <td align="center">
          <a href="./ppt/W-我要順服.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WY_我要順服.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WY_我要順服.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WY_我要順服.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">95</td> -->
        <td align="center">04WY</td>
        <td align="center">4</td>
        <td align="left">我有喜樂</td>
    
        <td align="center">
          <a href="./ppt/W-我有喜樂.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WY_我有喜樂.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WY_我有喜樂.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WY_我有喜樂.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">294</td> -->
        <td align="center">04WY</td>
        <td align="center">4</td>
        <td align="left">我要看見</td>
    
        <td align="center">
          <a href="./ppt/W-我要看見.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_WY_我要看見.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_WY_我要看見.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_WY_我要看見.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">96</td> -->
        <td align="center">04XL</td>
        <td align="center">4</td>
        <td align="left">喜樂泉源</td>
    
        <td align="center">
          <a href="./ppt/X-喜樂泉源.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_XL_喜樂泉源.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_XL_喜樂泉源.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_XL_喜樂泉源.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">97</td> -->
        <td align="center">04XS</td>
        <td align="center">4</td>
        <td align="left">獻上尊榮</td>
    
        <td align="center">
          <a href="./ppt/獻上尊榮.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_XS_獻上尊榮.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_XS_獻上尊榮.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_XS_獻上尊榮.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">98</td> -->
        <td align="center">04YD</td>
        <td align="center">4</td>
        <td align="left">一道江河</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_YD_ 一道江河.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YD_ 一道江河.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YD_ 一道江河.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center"></td> -->
        <td align="center">04YL</td>
        <td align="center">4</td>
        <td align="left">一粒麥子</td>
    
        <td align="center">
          <a href="./ppt/Y-一粒麥子.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 一粒麥子(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YL_一粒麥子.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YL_一粒麥子.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">99</td> -->
        <td align="center">04YN</td>
        <td align="center">4</td>
        <td align="left">願祢崇高</td>
    
        <td align="center">
          <a href="./ppt/Y-願祢崇高.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YN_願祢崇高.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YN_願祢崇高.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YN_願祢崇高.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">330</td> -->
        <td align="center">04YR</td>
        <td align="center">4</td>
        <td align="left">依然愛我</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 依然愛我(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04YR_ 依然愛我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04YR_ 依然愛我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">300</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">耶穌基督</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_YS_耶穌基督.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_耶穌基督.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_耶穌基督.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">100</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">一生一世</td>
    
        <td align="center">
          <a href="./ppt/Y-一生一世.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YS_一生一世.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_一生一世.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_一生一世.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">101</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">一生愛祢</td>
    
        <td align="center">
          <a href="./ppt/Y一生愛祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 一生愛祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_一生愛你.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_一生愛你.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">102</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">雲上太陽</td>
    
        <td align="center">
          <a href="./ppt/Y-雲上太陽.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YS_ 雲上太陽.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_雲上太陽.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_雲上太陽.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">103</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">耶穌掌權</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌掌權.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 耶穌掌權(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_耶稣耶稣.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_耶稣耶稣.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">104</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">耶穌的名</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_YS_耶稣的名.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_耶穌的名.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_耶穌的名.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">105</td> -->
        <td align="center">04YS</td>
        <td align="center">4</td>
        <td align="left">耶穌耶穌</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌耶穌.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YS_耶穌耶穌.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YS_耶穌掌權.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YS_耶穌掌權.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">106</td> -->
        <td align="center">04YT</td>
        <td align="center">4</td>
        <td align="left">因祂活著</td>
    
        <td align="center">
          <a href="./ppt/Y-因祂活著.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YT_因他活着.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YT_因祂活着.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YT_因祂活着.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">107</td> -->
        <td align="center">04YT</td>
        <td align="center">4</td>
        <td align="left">願天歡喜</td>
    
        <td align="center">
          <a href="./ppt/Y-願天歡喜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_YT_願天歡喜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_YT_願天歡喜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_YT_願天歡喜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">108</td> -->
        <td align="center">04YY</td>
        <td align="center">4</td>
        <td align="left">有一道河</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_YY_有一道河.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">109</td> -->
        <td align="center">04YZ</td>
        <td align="center">4</td>
        <td align="left">醫治這地</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 醫治這地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 醫治這地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 醫治這地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">110</td> -->
        <td align="center">04ZD</td>
        <td align="center">4</td>
        <td align="left">震動天地</td>
    
        <td align="center">
          <a href="./ppt/Z-震動天地.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 震動天地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_ZD_震动天地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_ZD_震动天地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">111</td> -->
        <td align="center">04ZM</td>
        <td align="center">4</td>
        <td align="left">讚美之泉</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04_ZM_讚美之泉_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">112</td> -->
        <td align="center">04ZP</td>
        <td align="center">4</td>
        <td align="left">主陪我走</td>
    
        <td align="center">
          <a href="./ppt/Z-主陪我走.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_ZP_主陪我走_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">353</td> -->
        <td align="center">05AW</td>
        <td align="center">5</td>
        <td align="left">愛我的天父</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 愛我的天父.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 愛我的天父.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 愛我的天父.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">113</td> -->
        <td align="center">05BP</td>
        <td align="center">5</td>
        <td align="left">奔跑不放棄</td>
    
        <td align="center">
          <a href="./ppt/B-奔跑不放棄_Y.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_BP_奔跑不放棄.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_BP_奔跑不放棄.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_BP_奔跑不放棄.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">115</td> -->
        <td align="center">05CQ</td>
        <td align="center">5</td>
        <td align="left">從前所珍愛</td>
    
        <td align="center">
          <a href="./ppt/C-從前所珍愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_CQ_從前所珍愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_CQ_從前所珍愛.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_CQ_從前所珍愛.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">114</td> -->
        <td align="center">05DG</td>
        <td align="center">5</td>
        <td align="left">禱告的大軍</td>
    
        <td align="center">
          <a href="./ppt/禱告的大軍.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_DG_禱告的大軍.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_DG_禱告的大軍.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_DG_禱告的大軍.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">364</td> -->
        <td align="center">05DG</td>
        <td align="center">5</td>
        <td align="left">禱告等候祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 禱告等候祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 禱告等候祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 禱告等候祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">360</td> -->
        <td align="center">05DN</td>
        <td align="center">5</td>
        <td align="left">當祢找到我</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/當祢找到我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=當祢找到我.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/當祢找到我.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">295</td> -->
        <td align="center">05DY</td>
        <td align="center">5</td>
        <td align="left">到耶稣那裡</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_DY_到耶稣那裡.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_DY_到耶稣那裡.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_DY_到耶稣那裡.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">116</td> -->
        <td align="center">05ED</td>
        <td align="center">5</td>
        <td align="left">恩典已降臨</td>
    
        <td align="center">
          <a href="./ppt/E恩典已降臨.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 恩典已降臨(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ED_恩典已降臨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ED_恩典已降臨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">9
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">4
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">117</td> -->
        <td align="center">05FS</td>
        <td align="center">5</td>
        <td align="left">凡事都能做</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_FS_凡事都能做.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_FS_凡事都能做.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_FS_凡事都能做.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">118</td> -->
        <td align="center">05FZ</td>
        <td align="center">5</td>
        <td align="left">翻轉的神蹟</td>
    
        <td align="center">
          <a href="./ppt/F-翻轉的神蹟.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 翻轉的神蹟.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_FZ_翻轉的神蹟.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_FZ_翻轉的神蹟.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">305</td> -->
        <td align="center">05GS</td>
        <td align="center">5</td>
        <td align="left">更深經歷你</td>
    
        <td align="center">
          <a href="./ppt/更深經歷祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 更深經歷祢(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_GS_更深經歷你.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_GS_更深經歷你.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">119</td> -->
        <td align="center">05HQ</td>
        <td align="center">5</td>
        <td align="left">呼求你憐憫</td>
    
        <td align="center">
          <a href="./ppt/H-呼求祢憐憫.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_HQ_呼求你憐憫.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_HQ_呼求你憐憫.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_HQ_呼求你憐憫.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">120</td> -->
        <td align="center">05JJ</td>
        <td align="center">5</td>
        <td align="left">緊緊抓住祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_JJ_緊緊抓住祢_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">121</td> -->
        <td align="center">05JQ</td>
        <td align="center">5</td>
        <td align="left">盡情的敬拜</td>
    
        <td align="center">
          <a href="./ppt/J-盡情的敬拜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 盡情的敬拜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_JQ_盡情的敬拜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_JQ_盡情的敬拜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">122</td> -->
        <td align="center">05JS</td>
        <td align="center">5</td>
        <td align="left">井水湧上來</td>
    
        <td align="center">
          <a href="./ppt/J-井水！湧出來.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 井水湧上來.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 井水湧上來.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 井水湧上來.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">298</td> -->
        <td align="center">05JS</td>
        <td align="center">5</td>
        <td align="left">救贖的恩典</td>
    
        <td align="center">
          <a href="./ppt/J-救贖的恩典.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 救贖的恩典.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_JS_救贖的恩典.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_JS_救贖的恩典.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">373</td> -->
        <td align="center">05JS</td>
        <td align="center">5</td>
        <td align="left">救贖的恩典 華商復活節版</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 救贖的恩典 復活節版.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 救贖的恩典 華商復活節版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 救贖的恩典 華商復活節版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">357</td> -->
        <td align="center">05JX</td>
        <td align="center">5</td>
        <td align="left">降下你恩雨</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 降下祢恩雨(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 降下你恩雨 Rain Down(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 降下你恩雨 Rain Down(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">125</td> -->
        <td align="center">05KJ</td>
        <td align="center">5</td>
        <td align="left">看見神的愛</td>
    
        <td align="center">
          <a href="./ppt/K看見神的愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_KJ_看見神的愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_KJ_看見神的愛.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_KJ_看見神的愛.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">126</td> -->
        <td align="center">05NA</td>
        <td align="center">5</td>
        <td align="left">祢愛永不變</td>
    
        <td align="center">
          <a href="./ppt/N-祢愛永不變.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 祢愛永不變.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_NA_祢愛永不變.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_NA_祢愛永不變.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">127</td> -->
        <td align="center">05NL</td>
        <td align="center">5</td>
        <td align="left">能力歸我神</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_NL_能力歸我神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_NL_能力歸我神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_NL_能力歸我神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">290</td> -->
        <td align="center">05NP</td>
        <td align="center">5</td>
        <td align="left">祢盼望掌權</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_NP_祢盼望掌權.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_NP_祢盼望掌權.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_NP_祢盼望掌權.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">128</td> -->
        <td align="center">05NS</td>
        <td align="center">5</td>
        <td align="left">祢是彌賽亞</td>
    
        <td align="center">
          <a href="./ppt/N-祢是彌賽亞.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_NS_祢是彌賽亞.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_NS_祢是彌賽亞.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_NS_祢是彌賽亞.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">129</td> -->
        <td align="center">05NS</td>
        <td align="center">5</td>
        <td align="left">祢是我天父</td>
    
        <td align="center">
          <a href="./ppt/N-祢是我天父.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_NS_祢是我天父.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">130</td> -->
        <td align="center">05NZ</td>
        <td align="center">5</td>
        <td align="left">祢坐著為王</td>
    
        <td align="center">
          <a href="./ppt/N-祢坐著為王.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 祢坐著為王.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_NZ_祢坐著為王.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_NZ_祢坐著為王.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">131</td> -->
        <td align="center">05QS</td>
        <td align="center">5</td>
        <td align="left">啟示錄之歌</td>
    
        <td align="center">
          <a href="./ppt/啟示錄之歌.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_QS_啟示錄之歌.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">132</td> -->
        <td align="center">05RY</td>
        <td align="center">5</td>
        <td align="left">榮耀歸於祢</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_RY_榮耀歸於祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_RY_榮耀歸於祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">133</td> -->
        <td align="center">05RY</td>
        <td align="center">5</td>
        <td align="left">榮耀的呼召</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_RY_榮耀的呼召.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_RY_榮耀的呼召.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_RY_榮耀的呼召.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">134</td> -->
        <td align="center">05RY</td>
        <td align="center">5</td>
        <td align="left">榮耀都歸祢</td>
    
        <td align="center">
          <a href="./ppt/R-榮耀都歸祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_RY_榮耀都歸祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_RY_榮耀都歸祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_RY_榮耀都歸祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">135</td> -->
        <td align="center">05RZ</td>
        <td align="center">5</td>
        <td align="left">讓讚美飛揚</td>
    
        <td align="center">
          <a href="./ppt/R-讓讚美飛揚.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 讓讚美飛揚.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_RZ_讓讚美飛揚.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_RZ_讓讚美飛揚.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">136</td> -->
        <td align="center">05SE</td>
        <td align="center">5</td>
        <td align="left">施恩寶座前</td>
    
        <td align="center">
          <a href="./ppt/S-施恩寶座前.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_SE_施恩寶座前.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_SE_施恩寶座前.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_SE_施恩寶座前.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">137</td> -->
        <td align="center">05SG</td>
        <td align="center">5</td>
        <td align="left">神羔羊配得</td>
    
        <td align="center">
          <a href="./ppt/S-神羔羊配得.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_SG_神羔羊配得.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_SG_神羔羊配得.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_SG_神羔羊配得.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">138</td> -->
        <td align="center">05SJ</td>
        <td align="center">5</td>
        <td align="left">聖潔全能主</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_SJ_聖潔全能主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_SJ_聖潔全能主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_SJ_聖潔全能主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">139</td> -->
        <td align="center">05SJ</td>
        <td align="center">5</td>
        <td align="left">十架上的愛</td>
    
        <td align="center">
          <a href="./ppt/十架上的愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 十架上的愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 十架上的愛.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 十架上的愛.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">140</td> -->
        <td align="center">05SL</td>
        <td align="center">5</td>
        <td align="left">聖靈請祢來</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_SL_聖靈請祢來.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_SL_聖靈請祢來.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_SL_聖靈請祢來.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">141</td> -->
        <td align="center">05SM</td>
        <td align="center">5</td>
        <td align="left">生命在於祢</td>
    
        <td align="center">
          <a href="./ppt/S-生命在於祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_SM_生命在於你.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_SM_生命在於祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_SM_生命在於祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">372</td> -->
        <td align="center">05SM</td>
        <td align="center">5</td>
        <td align="left">生命在於祢 華商版</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 生命在於祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 生命在於祢 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 生命在於祢 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">144</td> -->
        <td align="center">05ST</td>
        <td align="center">5</td>
        <td align="left">屬天的喜樂</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_ST_屬天的喜樂.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">142</td> -->
        <td align="center">05TQ</td>
        <td align="center">5</td>
        <td align="left">抬起我的頭</td>
    
        <td align="center">
          <a href="./ppt/T-抬起我的頭.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_TQ_抬起我的頭.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_TQ_抬起我的頭.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_TQ_抬起我的頭.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">143</td> -->
        <td align="center">05TS</td>
        <td align="center">5</td>
        <td align="left">天上的敬拜</td>
    
        <td align="center">
          <a href="./ppt/天上的敬拜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_TS_天上的敬拜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_TS_天上的敬拜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_TS_天上的敬拜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">145</td> -->
        <td align="center">05WD</td>
        <td align="center">5</td>
        <td align="left">偉大奇妙神</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_WD_偉大奇妙神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WD_偉大奇妙神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WD_偉大奇妙神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">146</td> -->
        <td align="center">05WR</td>
        <td align="center">5</td>
        <td align="left">無人能像祢</td>
    
        <td align="center">
          <a href="./ppt/W-無人能像祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_WR_無人能像祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WR_無人能像祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WR_無人能像祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">147</td> -->
        <td align="center">05WS</td>
        <td align="center">5</td>
        <td align="left">我神真偉大</td>
    
        <td align="center">
          <a href="./ppt/W-我神真偉大.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 我神真偉大.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WS_我神真偉大.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WS_我神真偉大.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">7
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">149</td> -->
        <td align="center">05WX</td>
        <td align="center">5</td>
        <td align="left">我心屬於祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 我心屬於祢(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WX_我心屬於祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WX_我心屬於祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">148</td> -->
        <td align="center">05WY</td>
        <td align="center">5</td>
        <td align="left">我要愛慕祢</td>
    
        <td align="center">
          <a href="./ppt/W-我要愛慕祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 我要愛慕祢(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WY_我要愛慕你.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WY_我要愛慕你.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">296</td> -->
        <td align="center">05WY</td>
        <td align="center">26</td>
        <td align="left">我已得自由 I Have Been Set Free</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_WY_我已得自由.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_WY_我已得自由 I Have Been Set Free.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_WY_我已得自由 I Have Been Set Free.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">150</td> -->
        <td align="center">05XX</td>
        <td align="center">5</td>
        <td align="left">信心的旅途</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_XX_信心的旅途.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_XX_信心的旅途.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_XX_信心的旅途.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">151</td> -->
        <td align="center">05XY</td>
        <td align="center">5</td>
        <td align="left">新耶路撒冷</td>
    
        <td align="center">
          <a href="./ppt/新耶路撒冷.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_XY_新耶路撒冷.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_XY_新耶路撒冷.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_XY_新耶路撒冷.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">152</td> -->
        <td align="center">05YF</td>
        <td align="center">5</td>
        <td align="left">有福的確據</td>
    
        <td align="center">
          <a href="./ppt/Y-有福的確據.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YF_有福的確據.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YF_有福的確據.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YF_有福的確據.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">153</td> -->
        <td align="center">05YH</td>
        <td align="center">5</td>
        <td align="left">永活全能神</td>
    
        <td align="center">
          <a href="./ppt/Y-永活全能神.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 永活全能神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 永活全能神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 永活全能神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">154</td> -->
        <td align="center">05YH</td>
        <td align="center">5</td>
        <td align="left">永恆的翅膀</td>
    
        <td align="center">
          <a href="./ppt/Y-永恆的翅膀.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YH_永恆的翅膀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YH_永恆的翅膀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YH_永恆的翅膀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">155</td> -->
        <td align="center">05YH</td>
        <td align="center">5</td>
        <td align="left">耶和華的心</td>
    
        <td align="center">
          <a href="./ppt/Y-耶和華的心.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YH_耶和華的心.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YH_耶和華的心.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YH_耶和華的心.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">156</td> -->
        <td align="center">05YN</td>
        <td align="center">5</td>
        <td align="left">與祢更靠近</td>
    
        <td align="center">
          <a href="./ppt/Y-與祢更靠近.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 與祢更靠近(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YN_與祢更靠近.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YN_與祢更靠近.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">5
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">157</td> -->
        <td align="center">05YN</td>
        <td align="center">5</td>
        <td align="left">願祢國降臨</td>
    
        <td align="center">
          <a href="./ppt/Y-願祢國降臨.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YN_願祢國降臨.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YN_願祢國降臨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YN_願祢國降臨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">158</td> -->
        <td align="center">05YS</td>
        <td align="center">5</td>
        <td align="left">耶穌祢醫治</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌祢醫治.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YS_耶穌祢醫治.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YS_耶穌祢醫治.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YS_耶穌祢醫治.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">159</td> -->
        <td align="center">05YS</td>
        <td align="center">5</td>
        <td align="left">耶穌我愛祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_YS_耶穌我愛祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YS_耶穌我愛祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YS_耶穌我愛祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">160</td> -->
        <td align="center">05YY</td>
        <td align="center">5</td>
        <td align="left">永遠的依靠</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 永遠的依靠.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YY_永遠的依靠.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YY_永遠的依靠.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">161</td> -->
        <td align="center">05YZ</td>
        <td align="center">5</td>
        <td align="left">因著十架愛</td>
    
        <td align="center">
          <a href="./ppt/Y-因著十架愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_YZ_因着十架爱.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_YZ_因着十架爱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_YZ_因着十架爱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">162</td> -->
        <td align="center">05ZA</td>
        <td align="center">5</td>
        <td align="left">主啊陶造我</td>
    
        <td align="center">
          <a href="./ppt/Z-主啊!陶造我.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_ZA_主啊陶造我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">163</td> -->
        <td align="center">05ZD</td>
        <td align="center">5</td>
        <td align="left">最大的是愛</td>
    
        <td align="center">
          <a href="./ppt/最大的是愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_ZD_最大的是愛.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZD_最大的是爱.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZD_最大的是爱.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">164</td> -->
        <td align="center">05ZL</td>
        <td align="center">5</td>
        <td align="left">這裡有榮耀 (華商版)</td>
    
        <td align="center">
          <a href="./ppt/這裡有榮耀.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 這裡有榮耀(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 這裡有榮耀 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 這裡有榮耀 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">8
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">362</td> -->
        <td align="center">05ZN</td>
        <td align="center">5</td>
        <td align="left">在祢寶座前</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 在祢寶座前.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 在祢寶座前.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 在祢寶座前.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">165</td> -->
        <td align="center">05ZS</td>
        <td align="center">5</td>
        <td align="left">真實的悔改</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/05_ZS_真實的悔改.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZS_真實的悔改.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZS_真實的悔改.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">166</td> -->
        <td align="center">05ZW</td>
        <td align="center">5</td>
        <td align="left">主我跟祢走</td>
    
        <td align="center">
          <a href="./ppt/Z-主,我跟祢走.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_ZW_主我跟祢走.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZW_主我跟祢走.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZW_主我跟祢走.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">167</td> -->
        <td align="center">05ZW</td>
        <td align="center">5</td>
        <td align="left">主我相信祢</td>
    
        <td align="center">
          <a href="./ppt/主我相信祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_ZW_主我相信祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZW_主我相信你.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZW_主我相信你.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">168</td> -->
        <td align="center">05ZY</td>
        <td align="center">5</td>
        <td align="left">只願得著祢</td>
    
        <td align="center">
          <a href="./ppt/Z-只願得著祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/05_ZY_只願得著祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZY_只願得著祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZY_只願得著祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">169</td> -->
        <td align="center">05ZZ</td>
        <td align="center">5</td>
        <td align="left">住在祢裡面</td>
    
        <td align="center">
          <a href="./ppt/Z-住在祢裡面.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 住在祢裡面.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=05_ZZ_住在祢里面.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/05_ZZ_住在祢里面.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">171</td> -->
        <td align="center">06BZ</td>
        <td align="center">6</td>
        <td align="left">寶座前的敬拜</td>
    
        <td align="center">
          <a href="./ppt/B-寶座前的敬拜.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_BZ_寶座前的敬拜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_BZ_寶座前的敬拜.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_BZ_寶座前的敬拜.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">172</td> -->
        <td align="center">06CG</td>
        <td align="center">6</td>
        <td align="left">從亙古到永遠</td>
    
        <td align="center">
          <a href="./ppt/C-從亙古到永遠.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 從亙古到永遠(3).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 從亙古到永遠(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 從亙古到永遠(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">173</td> -->
        <td align="center">06CP</td>
        <td align="center">6</td>
        <td align="left">從破碎到自由</td>
    
        <td align="center">
          <a href="./ppt/C-從破碎到自由.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_CP_從破碎到自由.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_CP_從破碎到自由.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_CP_從破碎到自由.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">174</td> -->
        <td align="center">06CS</td>
        <td align="center">6</td>
        <td align="left">此生愛祢不渝</td>
    
        <td align="center">
          <a href="./ppt/此生愛祢不渝.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_CS_此生愛祢不渝.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_CS_此生愛祢不渝.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_CS_此生愛祢不渝.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">175</td> -->
        <td align="center">06CZ</td>
        <td align="center">6</td>
        <td align="left">從這代到那代(華商版)</td>
    
        <td align="center">
          <a href="./ppt/C-從這代到那代.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 從這代到那代(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 從這代到那代 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 從這代到那代 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">365</td> -->
        <td align="center">06DS</td>
        <td align="center">6</td>
        <td align="left">大山為我挪開</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 大山為我挪開.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 大山為我挪開.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 大山為我挪開.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">176</td> -->
        <td align="center">06DW</td>
        <td align="center">6</td>
        <td align="left">帶我進入幔內</td>
    
        <td align="center">
          <a href="./ppt/D-帶我進入幔內.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_DW_帶我進入幔內.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_DW_帶我進入幔內.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_DW_帶我進入幔內.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">177</td> -->
        <td align="center">06GX</td>
        <td align="center">6</td>
        <td align="left">感謝我的救主</td>
    
        <td align="center">
          <a href="./ppt/G-感謝我的救主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_GX_感謝我的救主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_GX_感謝我的救主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_GX_感謝我的救主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">178</td> -->
        <td align="center">06HD</td>
        <td align="center">6</td>
        <td align="left">何等榮美的名</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_HD_何等榮美的名.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_HD_何等榮美的名.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_HD_何等榮美的名.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">179</td> -->
        <td align="center">06HL</td>
        <td align="center">6</td>
        <td align="left">哈利路亞組曲</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_HL_哈利路亚组曲.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_HL_哈利路亚组曲.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">352</td> -->
        <td align="center">06HZ</td>
        <td align="center">6</td>
        <td align="left">活著為要敬拜祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 活著為要敬拜祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 活著為要敬拜祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 活著為要敬拜祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">170</td> -->
        <td align="center">06JW</td>
        <td align="center">6</td>
        <td align="left">君王就在這裡</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 君王就在這裡.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 君王就在這裡.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 君王就在這裡.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">180</td> -->
        <td align="center">06KZ</td>
        <td align="center">6</td>
        <td align="left">靠著耶穌得勝</td>
    
        <td align="center">
          <a href="./ppt/K-靠著耶穌得勝.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_KZ_靠著耶穌得勝_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">181</td> -->
        <td align="center">06MD</td>
        <td align="center">6</td>
        <td align="left">每當我瞻仰祢</td>
    
        <td align="center">
          <a href="./ppt/每當我瞻仰祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 每當我瞻仰祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_MD_每當我瞻仰祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_MD_每當我瞻仰祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">182</td> -->
        <td align="center">06NX</td>
        <td align="center">6</td>
        <td align="left">祢信實何廣大</td>
    
        <td align="center">
          <a href="./ppt/N-祢信實何廣大.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_NX_祢信實何廣大.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_NX_祢信實何廣大.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_NX_祢信實何廣大.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">183</td> -->
        <td align="center">06NZ</td>
        <td align="center">6</td>
        <td align="left">你真配得荣耀</td>
    
        <td align="center">
          <a href="./ppt/N-祢真配得榮耀.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_NZ_祢真配得榮耀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_NZ_你真配得荣耀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_NZ_你真配得荣耀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">184</td> -->
        <td align="center">06QL</td>
        <td align="center">6</td>
        <td align="left">齊來宗主信徒</td>
    
        <td align="center">
          <a href="./ppt/Q-齊來宗主信徒.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_QL_齊來宗主信徒.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_QL_齊來宗主信徒.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_QL_齊來宗主信徒.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">185</td> -->
        <td align="center">06QN</td>
        <td align="center">6</td>
        <td align="left">求祢國度降臨</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_QN_求祢國度降臨.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_QN_求祢國度降臨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_QN_求祢國度降臨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">186</td> -->
        <td align="center">06RY</td>
        <td align="center">6</td>
        <td align="left">如鹰展翅上腾</td>
    
        <td align="center">
          <a href="./ppt/R-如鷹展翅上騰.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 如鹰展翅上腾.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_RY_如鹰展翅上腾.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_RY_如鹰展翅上腾.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">187</td> -->
        <td align="center">06SM</td>
        <td align="center">6</td>
        <td align="left">沙漠中的讚美</td>
    
        <td align="center">
          <a href="./ppt/S-沙漠中的讚美.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_SM_沙漠中的讚美.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_SM_沙漠中的讚美.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_SM_沙漠中的讚美.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">299</td> -->
        <td align="center">06SP</td>
        <td align="center">6</td>
        <td align="left">詩篇二十三篇 生命河靈糧堂</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 詩篇二十三篇 生命河靈糧堂(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 詩篇二十三篇 生命河靈糧堂(2).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 詩篇二十三篇 生命河靈糧堂(2).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">188</td> -->
        <td align="center">06SZ</td>
        <td align="center">6</td>
        <td align="left">聖哉聖哉聖哉</td>
    
        <td align="center">
          <a href="./ppt/S-聖哉聖哉聖哉.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_SZ_聖哉聖哉聖哉.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_SZ_聖哉聖哉聖哉.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_SZ_聖哉聖哉聖哉.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">189</td> -->
        <td align="center">06SZ</td>
        <td align="center">6</td>
        <td align="left">頌讚全能上帝</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_SZ_頌讚全能上帝.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_SZ_頌讚全能上帝.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_SZ_頌讚全能上帝.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">190</td> -->
        <td align="center">06SZ</td>
        <td align="center">6</td>
        <td align="left">聖哉聖哉聖哉 (万王之王万主之主组曲)</td>
    
        <td align="center">
          <a href="./ppt/聖哉聖哉聖哉萬王之王萬主之主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_SZ_聖哉聖哉聖哉萬王之王組曲.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_SZ_聖哉聖哉聖哉.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_SZ_聖哉聖哉聖哉.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">191</td> -->
        <td align="center">06WM</td>
        <td align="center">6</td>
        <td align="left">我們愛戴的王</td>
    
        <td align="center">
          <a href="./ppt/W-我們愛戴的王.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 我們愛戴的王.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_WM_我們愛戴的王.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_WM_我們愛戴的王.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">347</td> -->
        <td align="center">06WM</td>
        <td align="center">6</td>
        <td align="left">萬民同來敬拜 (華商版)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 萬民同來敬拜.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 萬民同來敬拜 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 萬民同來敬拜 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">192</td> -->
        <td align="center">06WQ</td>
        <td align="center">6</td>
        <td align="left">我全心跟隨祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_WQ_我全心跟隨祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_WQ_我全心跟隨祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_WQ_我全心跟隨祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">193</td> -->
        <td align="center">06WY</td>
        <td align="center">6</td>
        <td align="left">我要全心讚美 (華商版)</td>
    
        <td align="center">
          <a href="./ppt/W_我要全心讚美.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 我要全心讚美(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 我要全心讚美 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 我要全心讚美 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">7
      </td>
    
        <td align="center">3
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">194</td> -->
        <td align="center">06WZ</td>
        <td align="center">6</td>
        <td align="left">為主贏得城市</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_WZ_為主贏得城市.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_WZ_為主贏得城市.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_WZ_為主贏得城市.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">195</td> -->
        <td align="center">06WZ</td>
        <td align="center">6</td>
        <td align="left">我主耶穌真好</td>
    
        <td align="center">
          <a href="./ppt/我主耶穌真好.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_WZ_我主耶穌真好.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_WZ_我主何等偉大.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_WZ_我主何等偉大.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">196</td> -->
        <td align="center">06WZ</td>
        <td align="center">6</td>
        <td align="left">我主何等偉大</td>
    
        <td align="center">
          <a href="./ppt/W-我主何等偉大.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_WZ_我主何等偉大.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_WZ_我主耶穌真好.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_WZ_我主耶穌真好.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">197</td> -->
        <td align="center">06XS</td>
        <td align="center">6</td>
        <td align="left">獻上自己為祭</td>
    
        <td align="center">
          <a href="./ppt/X-獻上自已為祭.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_XS_獻上自己為祭.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_XS_獻上自己為祭.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_XS_獻上自己為祭.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">349</td> -->
        <td align="center">06XS</td>
        <td align="center">6</td>
        <td align="left">獻上自己為祭(華商版)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 獻上自己為祭.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 獻上自己為祭 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 獻上自己為祭 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">198</td> -->
        <td align="center">06YB</td>
        <td align="center">6</td>
        <td align="left">雅比斯的禱告</td>
    
        <td align="center">
          <a href="./ppt/Y-雅比斯的禱告.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YB_雅比斯的禱告.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">199</td> -->
        <td align="center">06YH</td>
        <td align="center">6</td>
        <td align="left">耶和華喜樂靈</td>
    
        <td align="center">
          <a href="./ppt/Y-耶和華喜樂靈.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YH_耶和華喜樂靈.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YH_耶和華喜樂靈.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YH_耶和華喜樂靈.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">200</td> -->
        <td align="center">06YK</td>
        <td align="center">6</td>
        <td align="left">一顆謙卑的心</td>
    
        <td align="center">
          <a href="./ppt/Y一顆謙卑的心.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YK_一顆謙卑的心.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YK_一顆謙卑的心.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">201</td> -->
        <td align="center">06YL</td>
        <td align="center">6</td>
        <td align="left">以利亞的日子</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_YL_以利亞的日子.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YL_以利亞的日子.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YL_以利亞的日子.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">202</td> -->
        <td align="center">06YN</td>
        <td align="center">6</td>
        <td align="left">願祢裂天而降</td>
    
        <td align="center">
          <a href="./ppt/Y-願祢裂天而降.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YN_願祢裂天而降.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YN_願祢裂天而降.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YN_願祢裂天而降.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">350</td> -->
        <td align="center">06YQ</td>
        <td align="center">6</td>
        <td align="left">一切歌頌讚美</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 一切歌頌讚美.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 一切歌頌讚美.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 一切歌頌讚美.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">203</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌在我裡面</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌在我裡面.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶稣在我里面.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶稣在我里面.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">204</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌我的救主</td>
    
        <td align="center">
          <a href="./ppt/Y-耶稣我的救主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌我的救主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶穌我的救主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶穌我的救主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">205</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌正在這裡</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌正在這裡.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌正在這裡.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶穌正在這裡.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶穌正在這裡.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">206</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">揚聲歡呼讚美</td>
    
        <td align="center">
          <a href="./ppt/Y-揚聲歡呼讚美.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 揚聲歡呼讚美(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_揚聲歡呼讚美.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_揚聲歡呼讚美.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">207</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌基督是主</td>
    
        <td align="center">
          <a href="./ppt/Y-耶稣基督是主.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌基督是主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶穌基督是主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶穌基督是主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">208</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌祢是中心(華商版)</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌祢是中心.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 耶穌祢是中心(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 耶穌祢是中心 華商版(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 耶穌祢是中心 華商版(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">209</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌超乎萬名</td>
    
        <td align="center">
          <a href="./ppt/耶穌超乎萬名.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌超乎萬名.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶穌超乎萬名.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶穌超乎萬名.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">210</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌祢是寶貴</td>
    
        <td align="center">
          <a href="./ppt/Y-耶穌祢是寶貴.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_YS_耶穌祢是寶貴.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_YS_耶穌祢是寶貴.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_YS_耶穌祢是寶貴.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">359</td> -->
        <td align="center">06YS</td>
        <td align="center">6</td>
        <td align="left">耶穌對我真好</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 耶穌對我真好.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 耶穌對我真好.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 耶穌對我真好.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">212</td> -->
        <td align="center">06ZA</td>
        <td align="center">6</td>
        <td align="left">主啊我們也要</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">213</td> -->
        <td align="center">06ZH</td>
        <td align="center">6</td>
        <td align="left">在呼召我之處</td>
    
        <td align="center">
          <a href="./ppt/Z-在呼召我之處.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_ZH_在呼召我之處.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZH_在呼召我之處.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZH_在呼召我之處.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">354</td> -->
        <td align="center">06ZH</td>
        <td align="center">6</td>
        <td align="left">在呼召我之處 (華商版)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 在呼召我之處.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 在呼召我之處 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 在呼召我之處 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">214</td> -->
        <td align="center">06ZN</td>
        <td align="center">6</td>
        <td align="left">主祢是我力量</td>
    
        <td align="center">
          <a href="./ppt/Z-主祢是我力量.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 主祢是我力量.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZN_主祢是我力量.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZN_主祢是我力量.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">215</td> -->
        <td align="center">06ZQ</td>
        <td align="center">6</td>
        <td align="left">主，求祢來恢復</td>
    
        <td align="center">
          <a href="./ppt/Z-主求祢來恢復.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_ZQ_主求祢來恢復.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZQ_主求你來恢復.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZQ_主求你來恢復.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">216</td> -->
        <td align="center">06ZR</td>
        <td align="center">6</td>
        <td align="left">主如明亮晨星</td>
    
        <td align="center">
          <a href="./ppt/Z-主如明亮晨星.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_ZR_主如明亮晨星.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZR_主如明亮晨星.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZR_主如明亮晨星.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">217</td> -->
        <td align="center">06ZS</td>
        <td align="center">6</td>
        <td align="left">這是聖潔之地</td>
    
        <td align="center">
          <a href="./ppt/Z-這是聖潔之地.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_ZS_這是聖潔之地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZS_這是聖潔之地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZS_這是聖潔之地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">218</td> -->
        <td align="center">06ZY</td>
        <td align="center">6</td>
        <td align="left">在耶穌的腳前</td>
    
        <td align="center">
          <a href="./ppt/Z-在耶穌的腳前.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/06_ZY_在耶稣的脚前.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=06_ZY_在耶穌的腳前.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/06_ZY_在耶穌的腳前.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">307</td> -->
        <td align="center">07BY</td>
        <td align="center">7</td>
        <td align="left">必有恩惠與慈愛</td>
    
        <td align="center">
          <a href="./ppt/B-必有恩惠與慈愛.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">219</td> -->
        <td align="center">07CT</td>
        <td align="center">7</td>
        <td align="left">從太陽出來之地</td>
    
        <td align="center">
          <a href="./ppt/C-從太陽出來之地.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 從太陽出來之地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_CT_從太陽出來之地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_CT_從太陽出來之地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">220</td> -->
        <td align="center">07CW</td>
        <td align="center">7</td>
        <td align="left">成為神蹟的器皿</td>
    
        <td align="center">
          <a href="./ppt/C-成為神蹟的器皿.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 成為神蹟的器皿.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 成為神蹟的器皿.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 成為神蹟的器皿.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">221</td> -->
        <td align="center">07DZ</td>
        <td align="center">7</td>
        <td align="left">當轉眼仰望耶穌</td>
    
        <td align="center">
          <a href="./ppt/D-當轉眼仰望耶穌.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_DZ_當轉眼仰望耶穌.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_DZ_當轉眼仰望耶穌.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_DZ_當轉眼仰望耶穌.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">222</td> -->
        <td align="center">07JT</td>
        <td align="center">7</td>
        <td align="left">今天可以不一樣</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/07_JT_今天可以不一樣.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_JT_今天可以不一樣.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_JT_今天可以不一樣.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">223</td> -->
        <td align="center">07JW</td>
        <td align="center">7</td>
        <td align="left">叫我抬起頭的神</td>
    
        <td align="center">
          <a href="./ppt/J-叫我抬起頭的神.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_JW_叫我抬起頭的神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_JW_叫我抬起頭的神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_JW_叫我抬起頭的神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">6
      </td>
    
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">224</td> -->
        <td align="center">07NB</td>
        <td align="center">7</td>
        <td align="left">祢必成就美好事</td>
    
        <td align="center">
          <a href="./ppt/N-祢必成就美好事.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_NB_祢必成就美好事.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_NB_祢必成就美好事.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_NB_祢必成就美好事.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">225</td> -->
        <td align="center">07NC</td>
        <td align="center">7</td>
        <td align="left">祢慈愛何等寶貴</td>
    
        <td align="center">
          <a href="./ppt/N-你慈愛何等寶貴.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_NC_祢慈愛何等寶貴.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">226</td> -->
        <td align="center">07ND</td>
        <td align="center">7</td>
        <td align="left">祢的恩典够我用</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_ND_祢的恩典够我用.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_ND_祢的恩典够我用.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">227</td> -->
        <td align="center">07ND</td>
        <td align="center">7</td>
        <td align="left">祢的愛不離不棄</td>
    
        <td align="center">
          <a href="./ppt/N-祢的愛不離不棄.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">228</td> -->
        <td align="center">07NP</td>
        <td align="center">7</td>
        <td align="left">祢配得至聖尊榮</td>
    
        <td align="center">
          <a href="./ppt/祢配得至聖尊榮.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_NP_祢配得至聖尊榮.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_NP_祢配得至聖尊榮.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_NP_祢配得至聖尊榮.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">329</td> -->
        <td align="center">07NX</td>
        <td align="center">7</td>
        <td align="left">祢昔在今在永在</td>
    
        <td align="center">
          <a href="./ppt/祢昔在今在永在.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_NX_祢昔在今在永在.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_NX_祢昔在今在永在.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_NX_祢昔在今在永在.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">230</td> -->
        <td align="center">07SF</td>
        <td align="center">10</td>
        <td align="left">01 釋放屬天的能力</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 釋放屬天的能力.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 釋放屬天的能力.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 釋放屬天的能力.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">229</td> -->
        <td align="center">07SL</td>
        <td align="center">7</td>
        <td align="left">聖靈來造訪這地</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/07_SL_聖靈來造訪這地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_SL_聖靈來造訪這地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_SL_聖靈來造訪這地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">231</td> -->
        <td align="center">07TQ</td>
        <td align="center">7</td>
        <td align="left">彈琴歌唱讚美祢</td>
    
        <td align="center">
          <a href="./ppt/T-彈琴歌唱讚美祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_TQ_彈琴歌唱讚美祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_TQ_彈琴歌唱讚美祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_TQ_彈琴歌唱讚美祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">232</td> -->
        <td align="center">07WD</td>
        <td align="center">7</td>
        <td align="left">我的救贖者活著</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/07_WD_我的救贖者活著.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_WD_我的救贖者活著.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_WD_我的救贖者活著.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">363</td> -->
        <td align="center">07WD</td>
        <td align="center">7</td>
        <td align="left">我多麼需要有祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 我多麼需要有祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 我多麼需要有祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 我多麼需要有祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">233</td> -->
        <td align="center">07WL</td>
        <td align="center">7</td>
        <td align="left">我來到主的聖殿</td>
    
        <td align="center">
          <a href="./ppt/W-我來到主的聖殿.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 我來到主的聖殿(3).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 我來到主的聖殿.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 我來到主的聖殿.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">7
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">234</td> -->
        <td align="center">07WM</td>
        <td align="center">7</td>
        <td align="left">我們成為一家人</td>
    
        <td align="center">
          <a href="./ppt/W-我們成為一家人.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_WM_我們成為一家人_W.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_WM_我們成為一家人_W.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">235</td> -->
        <td align="center">07WX</td>
        <td align="center">7</td>
        <td align="left">我心切切渴慕你</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_WX_我心切切渴慕你_W.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_WX_我心切切渴慕你_W.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">236</td> -->
        <td align="center">07WZ</td>
        <td align="center">7</td>
        <td align="left">我主基督已顯明</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_WZ_我主基督已顯明_W.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_WZ_我主基督已顯明_W.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">237</td> -->
        <td align="center">07WZ</td>
        <td align="center">7</td>
        <td align="left">我知谁掌管明天</td>
    
        <td align="center">
          <a href="./ppt/W-我知誰掌管明天.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 我知谁掌管明天(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 我知谁掌管明天(1).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 我知谁掌管明天(1).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">238</td> -->
        <td align="center">07WZ</td>
        <td align="center">7</td>
        <td align="left">我知主掌管明天</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_WZ_我知誰掌管明天.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_WZ_我知誰掌管明天.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">366</td> -->
        <td align="center">07XD</td>
        <td align="center">7</td>
        <td align="left">新的事將要成就</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 新的事將要成就.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 新的事將要成就.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 新的事將要成就.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">239</td> -->
        <td align="center">07YN</td>
        <td align="center">7</td>
        <td align="left">用祢雙手擁抱我(約書亞)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/07_YN_用祢雙手擁抱我.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_YN_用你雙手擁抱我_約書亞.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_YN_用你雙手擁抱我_約書亞.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">240</td> -->
        <td align="center">07YS</td>
        <td align="center">7</td>
        <td align="left">耶穌基督我救主</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/07_YS_耶穌基督我救主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_YS_耶穌基督我救主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_YS_耶穌基督我救主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">241</td> -->
        <td align="center">07ZA</td>
        <td align="center">7</td>
        <td align="left">主啊我到你面前</td>
    
        <td align="center">
          <a href="./ppt/Z-主啊我到祢面前.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/07_ZA_主啊我到祢面前.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_ZA_主啊我到袮面前.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_ZA_主啊我到袮面前.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">371</td> -->
        <td align="center">07ZK</td>
        <td align="center">7</td>
        <td align="left">展開屬天的翅膀</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 展開屬天的翅膀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 展開屬天的翅膀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 展開屬天的翅膀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">242</td> -->
        <td align="center">07ZN</td>
        <td align="center">7</td>
        <td align="left">主祢是我的盼望</td>
    
        <td align="center">
          <a href="./ppt/Z-主祢是我的盼望.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 主祢是我的盼望(2).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=07_ZN_主祢是我的盼望.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/07_ZN_主祢是我的盼望.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">243</td> -->
        <td align="center">08DW</td>
        <td align="center">8</td>
        <td align="left">帶我進入祢的同在</td>
    
        <td align="center">
          <a href="./ppt/D-带我進入祢的同在.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_DW_帶我進入祢的同在.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_DW_帶我進入祢的同在.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_DW_帶我進入祢的同在.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">244</td> -->
        <td align="center">08LW</td>
        <td align="center">8</td>
        <td align="left">領我到祢寶血裡面</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_LW_領我到祢寶血裡面.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_LW_領我到祢寶血裡面.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_LW_領我到祢寶血裡面.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">245</td> -->
        <td align="center">08NJ</td>
        <td align="center">8</td>
        <td align="left">祢降生的那个夜晚</td>
    
        <td align="center">
          <a href="./ppt/祢降生的那個夜晚.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_NJ_祢降生的那個夜晚.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NJ_祢降生的那个夜晚.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NJ_祢降生的那个夜晚.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">308</td> -->
        <td align="center">08NJ</td>
        <td align="center">8</td>
        <td align="left">祢降生的那個夜晚(MIDI)_ Soprano</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/你降生的那個夜晚 分部.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NJ_祢降生的那個夜晚(MIDI)_ Soprano.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NJ_祢降生的那個夜晚(MIDI)_ Soprano.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">309</td> -->
        <td align="center">08NJ</td>
        <td align="center">8</td>
        <td align="left">祢降生的那個夜晚(MIDI)_Bass</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/你降生的那個夜晚 分部.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NJ_祢降生的那個夜晚(MIDI)_Bass.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NJ_祢降生的那個夜晚(MIDI)_Bass.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">310</td> -->
        <td align="center">08NJ</td>
        <td align="center">8</td>
        <td align="left">祢降生的那個夜晚(MIDI)_Alto</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/你降生的那個夜晚 分部.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NJ_祢降生的那個夜晚(MIDI)_Soprano_Alto.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NJ_祢降生的那個夜晚(MIDI)_Soprano_Alto.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">311</td> -->
        <td align="center">08NJ</td>
        <td align="center">8</td>
        <td align="left">祢降生的那個夜晚(MIDI)_Tenor</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/你降生的那個夜晚 分部.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NJ_祢降生的那個夜晚(MIDI)_Tenor.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NJ_祢降生的那個夜晚(MIDI)_Tenor.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">246</td> -->
        <td align="center">08NM</td>
        <td align="center">8</td>
        <td align="left">你們要讚美耶和華</td>
    
        <td align="center">
          <a href="./ppt/N-你們要讚美耶和華.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_NM_你們要讚美耶和華.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NM_你們要讚美耶和華.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NM_你們要讚美耶和華.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">247</td> -->
        <td align="center">08NS</td>
        <td align="center">8</td>
        <td align="left">祢是我永遠的救主</td>
    
        <td align="center">
          <a href="./ppt/N-你是我永遠的救主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_NS_祢是我永遠的救主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_NS_祢是我永遠的救主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_NS_祢是我永遠的救主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">248</td> -->
        <td align="center">08QY</td>
        <td align="center">8</td>
        <td align="left">奇異恩典鎖鏈斷開</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_QY_奇異恩典鎖鏈斷開.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">249</td> -->
        <td align="center">08RW</td>
        <td align="center">8</td>
        <td align="left">讓我得見你的榮面</td>
    
        <td align="center">
          <a href="./ppt/讓我得見祢榮面.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_RW_讓我得見祢的榮面.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_RW_讓我得見祢的榮面.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_RW_讓我得見祢的榮面.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">250</td> -->
        <td align="center">08RY</td>
        <td align="center">8</td>
        <td align="left">榮耀君王願祢再來</td>
    
        <td align="center">
          <a href="./ppt/R-榮耀君王願祢再來.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_RY_榮耀君王願祢再來.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_RY_榮耀君王願祢再來.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_RY_榮耀君王願祢再來.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">251</td> -->
        <td align="center">08SF</td>
        <td align="center">8</td>
        <td align="left">聖法蘭西斯的禱告</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_SF_聖法蘭西斯的禱告_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">252</td> -->
        <td align="center">08SW</td>
        <td align="center">8</td>
        <td align="left">使我作你和平之子</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_SW_使我作你和平之子.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_SW_使我作你和平之子.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">253</td> -->
        <td align="center">08SW</td>
        <td align="center">8</td>
        <td align="left">使我做祢和平之子(小俊版)</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_SW_使我作你和平之子.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_SW_使我作你和平之子.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">254</td> -->
        <td align="center">08SZ</td>
        <td align="center">8</td>
        <td align="left">十字架是我的榮耀</td>
    
        <td align="center">
          <a href="./ppt/S-十字架是我的榮耀.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_SZ_十字架是我的榮耀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_SZ_十字架是我的榮耀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_SZ_十字架是我的榮耀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">255</td> -->
        <td align="center">08WD</td>
        <td align="center">8</td>
        <td align="left">我的一生在祢手中(華商版)</td>
    
        <td align="center">
          <a href="./ppt/W-我的一生在祢手中.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 我的一生在祢手中.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 我的一生在祢手中 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 我的一生在祢手中 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp4_player.php?fileName=03 我的一生在祢手中.mp4" target="mp4_player"><input name="imageField" type="image" id="imageField" src="./assets/images/video_play.png" width="30" height="30" border="0"></a>
		  <a href="./mp4/03 我的一生在祢手中.mp4" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">5
      </td>
    
        <td align="center">4
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">256</td> -->
        <td align="center">08WD</td>
        <td align="center">8</td>
        <td align="left">我對祢的愛永不變</td>
    
        <td align="center">
          <a href="./ppt/W-我對祢的愛永不變.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_WD_我對祢的愛永不變.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_WD_我對祢的愛永不變.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_WD_我對祢的愛永不變.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">258</td> -->
        <td align="center">08WG</td>
        <td align="center">8</td>
        <td align="left">萬國都要來讚美主</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_WG_萬國都要來讚美主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_WG_萬國都要來讚美主.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_WG_萬國都要來讚美主.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">257</td> -->
        <td align="center">08WM</td>
        <td align="center">8</td>
        <td align="left">我們歡迎君王降臨</td>
    
        <td align="center">
          <a href="./ppt/W-我們歡迎君王降臨.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 我們歡迎君王降臨.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 我們歡迎君王降臨.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 我們歡迎君王降臨.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">259</td> -->
        <td align="center">08WX</td>
        <td align="center">8</td>
        <td align="left">我心要稱謝耶和華</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_WX_我心要稱謝耶和華.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_WX_我心要稱謝耶和華.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_WX_我心要稱謝耶和華.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">260</td> -->
        <td align="center">08WY</td>
        <td align="center">8</td>
        <td align="left">我願一生都跟隨祢</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/08_WY_我願一生都跟隨祢_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">261</td> -->
        <td align="center">08XD</td>
        <td align="center">8</td>
        <td align="left">新的異象新的方向</td>
    
        <td align="center">
          <a href="./ppt/新的異象新的方向.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 新的異象新的方向(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_XD_新的異象新的方向.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_XD_新的異象新的方向.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">7
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">262</td> -->
        <td align="center">08YH</td>
        <td align="center">8</td>
        <td align="left">耶和華祢是我的神</td>
    
        <td align="center">
          <a href="./ppt/Y-耶和華你是我的神.ppt" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_YH_耶和華祢是我的神.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_YH_耶和華祢是我的神.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_YH_耶和華祢是我的神.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">263</td> -->
        <td align="center">08YN</td>
        <td align="center">8</td>
        <td align="left">願祢榮耀遍及全地</td>
    
        <td align="center">
          <a href="./ppt/Y-願祢榮耀遍及全地.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_YN_願祢榮耀遍及全地_W.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">264</td> -->
        <td align="center">08YW</td>
        <td align="center">8</td>
        <td align="left">一萬個理由稱頌主</td>
    
        <td align="center">
          <a href="./ppt/Y-一萬個理由稱頌主.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_YW_一萬個理由稱頌主.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">265</td> -->
        <td align="center">08ZD</td>
        <td align="center">8</td>
        <td align="left">主的喜樂是我力量</td>
    
        <td align="center">
          <a href="./ppt/Z-主的喜樂是我力量.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 主的喜樂是我的力量(3).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_ZD_主的喜樂是我力量.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_ZD_主的喜樂是我力量.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">7
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">2
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">266</td> -->
        <td align="center">08ZN</td>
        <td align="center">8</td>
        <td align="left">主祢永遠與我同在</td>
    
        <td align="center">
          <a href="./ppt/Z-主祢永遠與我同在.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/02 主祢永遠與我同在(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">267</td> -->
        <td align="center">08ZS</td>
        <td align="center">8</td>
        <td align="left">主是道路真理生命</td>
    
        <td align="center">
          <a href="./ppt/Z-主是道路真理生命.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/08_ZS_主是道路真理生命.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=08_ZS_主是道路真理生命.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/08_ZS_主是道路真理生命.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">268</td> -->
        <td align="center">08ZW</td>
        <td align="center">11</td>
        <td align="left">04 主我獻上生命給祢</td>
    
        <td align="center">
          <a href="./ppt/主我獻上生命給祢.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 主我獻上生命給祢.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 主我獻上生命給祢.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 主我獻上生命給祢.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">3
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">2
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">269</td> -->
        <td align="center">09QN</td>
        <td align="center">9</td>
        <td align="left">求祢為我造清潔的心</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/09_QN_求祢為我造清潔的心.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">270</td> -->
        <td align="center">09QY</td>
        <td align="center">9</td>
        <td align="left">奇異恩典不再有捆綁</td>
    
        <td align="center">
          <a href="./ppt/Q-奇異恩典不再有捆綁.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/09_QY_奇異恩典不再有捆綁.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=09_QY_奇異恩典不再有捆綁.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/09_QY_奇異恩典不再有捆綁.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">271</td> -->
        <td align="center">09SL</td>
        <td align="center">8</td>
        <td align="left">聖靈請祢來充滿我心</td>
    
        <td align="center">
          <a href="./ppt/S-聖靈請祢來充滿我心.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/03 聖靈請祢來充滿我心(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 聖靈請祢來充滿我心.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 聖靈請祢來充滿我心.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">272</td> -->
        <td align="center">09SP</td>
        <td align="center">9</td>
        <td align="left">詩篇130篇1-3</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/09_SP_詩篇130篇1-4.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=09_SP_詩篇130篇1-4.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/09_SP_詩篇130篇1-4.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">273</td> -->
        <td align="center">09WM</td>
        <td align="center">9</td>
        <td align="left">我們愛讓世界不一樣</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 我們愛讓世界不一樣.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=09_WM_我們愛讓世界不一樣.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/09_WM_我們愛讓世界不一樣.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">337</td> -->
        <td align="center">09WY</td>
        <td align="center">9</td>
        <td align="left">我以禱告來到祢跟前</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">368</td> -->
        <td align="center">09ZD</td>
        <td align="center">9</td>
        <td align="left">主的喜樂是我的力量(固定調)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 主的喜樂是我的力量 固定調.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 主的喜樂是我的力量(2).mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 主的喜樂是我的力量(2).mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">0
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">275</td> -->
        <td align="center">09ZY</td>
        <td align="center">9</td>
        <td align="left">主耶穌被釘在十架上</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/09_ZY_主耶穌被釘在十架上.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=09_ZY_主耶稣被钉在十架上.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/09_ZY_主耶稣被钉在十架上.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">276</td> -->
        <td align="center">09ZZ</td>
        <td align="center">9</td>
        <td align="left">坐在寶座上聖潔羔羊</td>
    
        <td align="center">
          <a href="./ppt/Z-坐在寶座上聖潔羔羊.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/09_ZZ_坐在寶座上聖潔羔羊.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=09_ZZ_坐在寶座上聖潔羔羊.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/09_ZZ_坐在寶座上聖潔羔羊.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">348</td> -->
        <td align="center">10SP</td>
        <td align="center">10</td>
        <td align="left">詩篇一百卅篇一至四節(華商版)</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 詩篇一百卅篇一至四節.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 詩篇一百卅篇一至四節 華商版.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 詩篇一百卅篇一至四節 華商版.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">277</td> -->
        <td align="center">10WD</td>
        <td align="center">10</td>
        <td align="left">我的心祢要稱謝耶和華</td>
    
        <td align="center">
          <a href="./ppt/W-我的心你要稱謝耶和華.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04 我的心你要稱頌耶和華.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=10_WD_我的心你要稱頌耶和華.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/10_WD_我的心你要稱頌耶和華.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">355</td> -->
        <td align="center">10WX</td>
        <td align="center">10</td>
        <td align="left">我需要有祢在我生命中</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 我需要有祢在我生命中.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 我需要有祢在我生命中.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 我需要有祢在我生命中.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">376</td> -->
        <td align="center">1E HC</td>
        <td align="center">4</td>
        <td align="left">How Can It Be</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 How Can It Be.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=03 How Can It Be.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/03 How Can It Be.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">356</td> -->
        <td align="center">1E HG</td>
        <td align="center">3</td>
        <td align="left">His Glory Appears</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 His Glory Appears(1).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">278</td> -->
        <td align="center">1EBT</td>
        <td align="center">3</td>
        <td align="left">Bless the Lord - Matt Redman</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_BT_Bless the Lord - Matt Redman.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_BT_Bless the Lord - Matt Redman.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">279</td> -->
        <td align="center">1EDD</td>
        <td align="center">3</td>
        <td align="left">Deck The Halls</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/1E_DT_Deck The Halls.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">280</td> -->
        <td align="center">1EFY</td>
        <td align="center">5</td>
        <td align="left">For Your Name Is Holy_Let The Wei</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/1E_FY_For Your Name Is Holy.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_FY_For Your Name Is Holy_Let The Wei.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_FY_For Your Name Is Holy_Let The Wei.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">284</td> -->
        <td align="center">1EOW</td>
        <td align="center">2</td>
        <td align="left">One Way</td>
    
        <td align="center">
          <a href="./ppt/One Way.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/01 One Way(3).pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_OW_One Way.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_OW_One Way.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">4
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">3
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">82</td> -->
        <td align="center">1ESD</td>
        <td align="center">3</td>
        <td align="left">The First Noel_聖誕佳音</td>
    
        <td align="center">
          <a href="./ppt/S-聖誕佳音.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/04_SD_聖誕佳音.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04_SD_聖誕佳音.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04_SD_聖誕佳音.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">2
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">291</td> -->
        <td align="center">1ETI</td>
        <td align="center">4</td>
        <td align="left">This Is Amazing Grace</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/1E_TI_This Is Amazing Grace.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_TI_This Is Amazing Grace.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_TI_This Is Amazing Grace.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center">★</td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">281</td> -->
        <td align="center">1EWW</td>
        <td align="center">6</td>
        <td align="left">We Wish You a Merry Christmas</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/1E_WW_We Wish You A Merry Christmas.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_WW_ We Wish You a Merry Christmas.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_WW_ We Wish You a Merry Christmas.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">283</td> -->
        <td align="center">1EYA</td>
        <td align="center">5</td>
        <td align="left">You Are My Hiding Place</td>
    
        <td align="center">
          <a href="./ppt/You Are my Hiding Place.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/1E_YA_You Are My Hiding Place.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_YA_You Are My Hiding Place_190519_3.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_YA_You Are My Hiding Place_190519_3.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">282</td> -->
        <td align="center">1EYR</td>
        <td align="center">4</td>
        <td align="left">You Raise Me UP</td>
    
        <td align="center">
          <a href="./ppt/Y-You  Raise  Me  Up.pptx" download><input name="imageField1" type="image" id="imageField1" src="./assets/images/ppt-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./pdf/1E_YR_You Raise Me UP.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=1E_YR_You Raise Me UP.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/1E_YR_You Raise Me UP.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">2
      </td>
    
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">335</td> -->
        <td align="center">CS05</td>
        <td align="center">5</td>
        <td align="left">稱頌祢聖名</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">334</td> -->
        <td align="center">FS08</td>
        <td align="center">8</td>
        <td align="left">凡事都有神的美意</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">345</td> -->
        <td align="center">QC05</td>
        <td align="center">5</td>
        <td align="left">求充滿這地</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/04 求充滿這地.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=04 求充滿這地.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/04 求充滿這地.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">342</td> -->
        <td align="center">SJ_05</td>
        <td align="center">5</td>
        <td align="left">十架是榮耀</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/02 十架是榮耀.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=02 十架是荣耀.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/02 十架是荣耀.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">336</td> -->
        <td align="center">SM05</td>
        <td align="center">5</td>
        <td align="left">生命的盼望</td>
    
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">341</td> -->
        <td align="center">XZ_07</td>
        <td align="center">7</td>
        <td align="left">01 行在信實恩典中</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/01 行在信實恩典中.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center">
          <a href="./mp3_player.php?fileName=01 行在信實恩典中.mp3" target="mp3_player"><input name="imageField" type="image" id="imageField" src="./assets/images/Play_button_next_stop_music_pause.png" width="30" height="30" border="0"></a>
		  <a href="./mp3/01 行在信實恩典中.mp3" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/download-Icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>
      <tr>
        <td align="center">
    
        </td>
        <!-- <td align="center">344</td> -->
        <td align="center">YS_06</td>
        <td align="center">6</td>
        <td align="left">耶穌祢已得勝</td>
    
        <td align="center"></td>
      
        <td align="center">
          <a href="./pdf/03 耶穌祢已得勝.pdf" download><input name="imageField3" type="image" id="imageField3" src="./assets/images/pdf-icon.png" width="30" height="30" border="0"></a>
        </td>
      
        <td align="center"></td>
      
        <td align="center"></td>
      
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center">★</td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
            <td align="center"></td>
          
          <td align="center"></td>
        
      <td align="center">1
      </td>
    
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">0
        </td>
      
        <td align="center">1
        </td>
      
        <td align="center">0
        </td>
      </tr>  
  </tbody>
</table>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-13 bd-page-width bd-tagstyles bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed " id="section38" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-10 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row ">
                <div class=" bd-columnwrapper-29 
 col-lg-10
 col-md-9
 col-sm-6">
    <div class="bd-layoutcolumn-29 bd-column" ><div class="bd-vertical-align-wrapper"><div class=" bd-customhtml-12 bd-tagstyles bd-custom-bulletlist bd-bootstrap-tables bd-table-striped bd-table-bordered bd-table-hover bd-table-condensed">
    <div class="bd-container-inner bd-content-element">
        <nav>

  <ul class="pagination">
    
          <li class="active"><a href="javascript:void(0);" draggable="false">1</a></li>
        
  </ul>
 
</nav>
    </div>
</div></div></div>
</div>
	
		<div class=" bd-columnwrapper-28 
 col-lg-2
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-28 bd-column" ><div class="bd-vertical-align-wrapper"><form class=" bd-form-7 bd-no-margins form-inline"
 action="#"
 name="form-name" method="post">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class=" bd-select-3 form-group">

  <label class="bd-form-label">每頁列數</label>    
  <select class="bd-form-input" title="Select" onChange="MM_jumpMenu('self',this,0)"> 

    <option value="?go=home&key_name=&page_count=50" >50</option>
  
    <option value="?go=home&key_name=&page_count=100" >100</option>
  
    <option value="?go=home&key_name=&page_count=500" >500</option>
  
    <option value="?go=home&key_name=&page_count=1000" selected>1000</option>
  
  </select>
  
</div>
        </div>
    </div>
</form></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
</div>
</div>
</div>

                    
                </div>
                
            </div>
            
        </div>

    </div>
</div></div>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-67 bd-icon "></span>
</a></div>
	
		<div class="bd-containereffect-138 container-effect container ">



</div>
</body>
</html>