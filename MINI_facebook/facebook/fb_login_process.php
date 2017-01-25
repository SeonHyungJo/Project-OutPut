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
			<li class="active"><a href="fb_login.php">로그인</a></li>
			<li><a href="fb_register.php">회원가입</a></li>
			<li><a href="fb_search.php">회원검색</a></li>
			<li><a href="fb_guestbook.php">방명록</a></li>
			</ul>
        </div>
        
		<div id="content" style="text-align: center;">
		
		
		
		<div align="center">
		<p style="text-align:center;"><img style="width:30%;"src="result.jpg">
		<p style="font-size: 30px; font-weight: bold;">로그인 결과</p><br>
<?php
	$str = <<<login
		<table style="width:40%; height: 80px;">
			<tr>
			<td style="font-weight:bold; width: 30%">
			아이디
			</td>
			<td>
			$_POST[id]
			</td>
			</tr>
			
			
			<tr>
			<td style="font-weight:bold;">
			비밀번호
			</td>
			<td>
			$_POST[password]
			</td>
			</tr>
		</table>
login;
echo "$str";
?>
			</div><br><br>
  
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>