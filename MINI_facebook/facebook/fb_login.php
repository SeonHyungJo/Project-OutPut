<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>

<link rel="stylesheet" type="text/css" href="./fb_layout.css">
<link rel="stylesheet" type="text/css" href="./fb_menu.css">

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
        
		<div id="content">
		<div style="text-align: center;"><p style="font-size: 40px; font-weight: bold;">로그인</p><br>
		</div>

		<form method="post" style="width: 100%;"action="fb_login_process.php" name="login">
			<table style="text-align: center; margin-right: auto; margin-left: auto; width: 290px; height: 60px" cellpadding="2" cellspacing="2">
				<tbody>
				<tr>
				<td style="vertical-align: top; width: 125px; text-align: center"> 
					<table style="border:3px ; border-style: solid; border-color: #47C83E; width: 200px;"></td><td>
					<input style="color:#9E9E9E; border:0px;"maxlength="30" size="22" name="id" type="email" placeholder="ID(E-mail)" required></td></tr>
					</table>
				</td>
				<td colspan="1" rowspan="2" style="vertical-align: top; width: 84px;">
				<input style="width: 80px; height: 50px;" name="loginButton" value="로그인" type="submit">
				</td>
				</tr>
		
				<tr>
				<td style="vertical-align: top; width: 125px; text-align: center">
					<table style="border:3px ; border-style: solid; border-color: #47C83E; width: 200px;"><tr><td>
					<input style="color:#9E9E9E; border:0px;" maxlength="30" size="22" name="password" placeholder="password" type="password" required></td></tr>
					</table>
				</td>
				</tr>

				<tr>
				<td colspan="2" rowspan="1" style="vertical-align: top; width: 125px; text-align: center">
					<br><div style="text-align: center; width: 100%;">
					<input name="registration" value="회원가입" type="submit" onclick="location.href='http://ait.kyonggi.ac.kr/~s201213829/facebook/fb_register.html'">&nbsp;&nbsp;
					<input name="cancel" value="취소하기" type="reset"><br>
				</div>
				</td>
				</tr>
				</tbody>
			</table><br>
		</form>

			
		</div>
  
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>