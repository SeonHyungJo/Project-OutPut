<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title><!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" type="text/css" href="./fb_layout.css">
<link rel="stylesheet" type="text/css" href="./fb_menu.css">
<link rel="stylesheet" type="text/css" href="./fb_registerForm.css">
<meta charset="UTF-8"></head><body>
    <div id="wrapper">
        
         <div id="header">
            <p>SH's FaceBook</p>
        </div>
       
       
        <div id="navigation">
           <ul id="menu-bar">
			<li><a href="fb_home.php">홈</a></li>
			<li><a href="fb_login.php">로그인</a></li>
			<li><a href="fb_register.php">회원가입</a></li>
			<li class="active"><a href="fb_search.php">회원검색</a></li>
			<li><a href="fb_guestbook.php">방명록</a></li>
			</ul>
        </div>
		<div id="content" style="text-align: center;">
		<p style="text-align:center;"><img style="width:30%;"src="result.jpg">
		
<?php
$str = <<<search
	<p style="text-align:center; font-weight:bold;">회원검색 결과 페이지 입니다.<br><br>
	<table id="table" style="text-align: center; height:40px">
		<tr>
		<td style="font-weight:bold; width:50%">검색한 단어
		</td>
		<td style="font-weight:bold;">$_POST[searching]
		</td>
		</tr>
	</table><br><br>
search;
echo "$str";
?>
		</div>
      
        
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>