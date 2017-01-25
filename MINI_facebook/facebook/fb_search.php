<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>

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
    
		

		<p style="text-align:center;">회원검색 페이지 입니다.

		<form method="post" action="fb_search_process.php" name="searchForm" ><br>
			
			<table id="table" style="margin-left: auto; margin-right: auto; text-align: center; vertical-align: middle;  width:50%; height: 30px;">
				<div id="content" style="text-align: center;vertical-align: middle; ">
				<tr >
				<td style="width: 19%;">
				<a href="http://ait.kyonggi.ac.kr/~s201213829/facebook/fb_home.php">
				<img  style="vertical-align:middle; width:100%; height:30px;"src="logoFont.jpg"></a>
				</td>

				<td>
				<input style="text-align:left; border:0px; font-size:13px; font-weight: bold; color:#979797;" maxlength="10" size="33" name="searching" placeholder="검색할 이름/이메일/번호를 입력해 주세요."></td>

				<td style="width:20px;">
				<input  style="background-color:#47C83E; color:#FFFFFF;"name="searchButton" value="검색하기" type="submit">
				</td>
				</tr>
				</div>
			</table>
			<br>
			<br>
			
		</form>
		
      
        
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>