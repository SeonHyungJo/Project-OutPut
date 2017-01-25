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
			<li class="active"><a href="fb_register.php">회원가입</a></li>
			<li><a href="fb_search.php">회원검색</a></li>
			<li><a href="fb_guestbook.php">방명록</a></li>
			</ul>
        </div>
        
		<div id="content" style="text-align:cetner;">
		<p style="text-align:center;"><img style="width:30%;"src="result.jpg">
<?php
$str = <<<register
			<table id="table" style="">
				<tr>
				<td style="font-size:20px; font-weight:bold; text-align: center;">
				<img  style="width:100%" src="logoFont.jpg" alt=""><br>
				<p text-align=center>회원가입정보가 저장되었습니다.</p>
				</td>
				</tr>
			</table><br><br>

			
			<table id="table" style="height:400px">
			<tbody style="text-align:center;">
				<tr>
				<td style="width:150px; font-weight:bold;;">* 아이디</td>
				<td>$_POST[id]</td>
				</tr>
	
				<tr>
				<td style="font-weight:bold;;">* 비밀번호</td>
				<td>$_POST[password]</td>
				</tr>	
		
				<tr>
				<td style="font-weight:bold;;">* 비밀번호 확인</td>
				<td>$_POST[passwordCheck]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">*이름</td>
				<td>$_POST[name]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">성별</td>
				<td>$_POST[sex]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">생일</td>
				<td>$_POST[birth]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">핸드폰 번호</td>
				<td>$_POST[phoneNum]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">주소</td>
				<td>$_POST[address]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">연애/결혼/자녀여부</td>
				<td> $_POST[maritalStatus]</td>
				</tr>
				
				<tr>
				<td style="font-weight:bold;;">자기소개</td>
				<td>$_POST[selfInro]
				</tr>
			</tbody>
			</table><br><br>
register;
echo "$str";
?>
		</div>
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    
</body>
</html>