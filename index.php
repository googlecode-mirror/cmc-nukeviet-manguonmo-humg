<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> Xuanhuan </title>

  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 <link rel="stylesheet" type="text/css"  href="bai5.css">
 <script type="text/javascript" src="jquery.min.js" ></script>
<script type="text/javascript" src="jquery-ui.min.js" ></script>

<script language="javascript">
$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 3000, true);
	});

function checkinput_search(){
	var objkeyword=document.getElementById("txt_keyword");
	if(objkeyword.value=="" || objkeyword.value=="Search" ){
		objkeyword.value="Search";
		objkeyword.focus();
		alert("Ban phai nhap tu khoa truoc khi search!");
		return false;
	}
	return true;
}
run();
</script>
	
 </head>

  <div id= "wapper">
	<div id ="header">
	<ul class="login">
				<li><a href="code/dangnhap.php">Đăng nhập</a></li>
					<li><a href="code/dangky.php">Đăng ký</a></li>
			</ul>
	
		</div>
	
	<div id="nav">
		
		<?php include("modules/mod_nav.php"); ?>
	</div>
	<div id ="body">
		
		<div id="slide_view">
			<?php include("modules/mod_slideImg.php");?>
		</div>

			<div id="body2">
				<div id="left"> <?php include("modules/tieumuc.php") ?>
				</div>
				<div id="center"><?php include("modules/tintuc1.php") ?>
			</div>
			<div id="right">

			</div>
		</div>
	</div>

	<div id ="footer">
			<ul class="copyright">
				<h6> Copyright @ 2012 by XuanHuan.</h6>
			</ul>
	</div>
	</div>
</body></html>