<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>

		<script>
			function myFunction() {
			var pass1 = document.getElementById("password").value;
			var pass2 = document.getElementById("passwordCheck").value;
			if (pass1 != pass2) {
				alert("비밀번호가 같지 않습니다.");
				history.back();}
			}	
		</script>

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
		<form method="post" action="fb_register_process.php"  name="registForm" style="width: 100%; text-align:center;" >
		
			<table id="table" style="">
				<tr>
				<td style="font-size:40px; font-weight:bold; text-align: center;">
				<img  style="width:100%" src="logoFont.jpg" alt="">
				<div style=" color:#FF3636; font-size:12px; text-align:left; font-weight:bold;">*  표시는 필수사항입니다.</div>
				</td>
				</tr>
				</table>
				<br><br>
					<table style="height:200px;" cellpadding="2" cellspacing="2" id="table">
					<tbody>
					<tr>
					<td style="height:80px; font-size:13px; text-align:left; font-weight:bold;;">&nbsp;&nbsp;&nbsp;* 아이디<br><br>
					<table id="table" style="width:80%; height:40%;">
					<td>
					<input style="text-align:center; border:0px; font-size:20px " maxlength="30" type="email" size="20" name="id" placeholder="Example @ naver.com" required><br>
					</td>
					</table>
				</td>
				</tr>
	
				<tr>
				<td style="height:50px; font-size:10px; text-align:left; font-weight:bold;;">&nbsp;&nbsp;&nbsp;* 비밀번호<br><br>
					<table id="table" style="width:80%; height:30%;">
					<td>
					<input id="password" style="text-align:center; border:0px; font-size:15px" maxlength="10" size="20" name="password" placeholder="**********"type="password" required><br>
					</td>
					</table>
				</td>
				</tr>	
	
				<tr>
				<td style="height:50px; font-size:10px; text-align:left; font-weight:bold;;">
				&nbsp;&nbsp;&nbsp;* 비밀번호 확인<br><br>
					<table id="table" style="width:80%; height:30%;">
					<td>
					<input id="passwordCheck" style="text-align:center; border:0px; font-size:15px" maxlength="10" size="20" name="passwordCheck" placeholder="**********" type="password" required>
					</input><br>
					</td>
					</table>
				</td>
				</tr>
				</tbody>
			</table>
		<br>



			<table style="height: 260px"  id="table" >
			
				<tr>
					<td colspan="2" rowspan="1" style="width: 50%; font-size: 15px; vertical-align: middle;" >
					*&nbsp;이름(name)
					</td>
					<td colspan="2" rowspan="1" style="height: 30px; width:50%" >
					<input style="text-align:center; border:0px; font-size:15px; maxlength="5" size="10" name="name" placeholder="홍길동" autofocus required><br>
					</td>
				</tr>
	
				<tr>
				<td colspan="4" rowspan="1" style="height: 30px">
				<input style="text-align:center; font-weight: bold;" name="sex" value="man" type="radio" checked="checked">&nbsp;<span style="font-weight: bold;">남자
				</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="text-align:center;" name="sex" value="woman" type="radio">&nbsp;<span style="font-weight: bold;">여자</span>
				</td>
				</tr>
				
				
				</tr>
	
				<tr>
				<td colspan="2" rowspan="1" style="height: 30px">생일
				<div style="font-size:12px; text-align:center;">(Date if birth)</div>
				</td>
		
				<td colspan="2" rowspan="1"style="height: 30px;">
				<input style="text-align:center; border:0px; font-size:13px; color:#979797;" maxlength="4" size="5" name="birth" placeholder="년(4자)" type="date">
				</td>
				
				</tr>
	
				<tr>
				<td colspan="2" rowspan="1"style="height: 40px; ">핸드폰번호<br>
				<div style="font-size:12px; text-align:center;">(Phone Number)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<input style="text-align:center; border:0px; font-size:15px; maxlength="11" size="15"  name="phoneNum" placeholder="010XXXXXXXX" >
				</td>
				</tr>
	
				<tr>
				<td colspan="2" rowspan="1"style="height: 30px">주소<br>
				<div style="font-size:12px; text-align:center;">(Adseress)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<input style="text-align:center; border:0px; font-size:14px" maxlength="40" size="25" name="address" placeholder="경기도 수원시 영통구">
				</td>
				</tr>
	
				<tr>
				<td colspan="2" rowspan="1"style="height: 50px;">연애/결혼 여부
				<div style="font-size:12px; text-align:center;">(Check)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<div style="font-size:12px; text-align:left">
				<input checked=checked name="maritalStatus" value="기혼" type="radio">&nbsp;기혼&nbsp;
				<input checked=checked name="maritalStatus" value="연애중" type="radio">연애중 &nbsp;
				<input checked=checked name="maritalStatus" value="솔로" type="radio">솔로&nbsp;<br>
				</div>
				
				</td>
				</tr>
	
				<tr>
				<td colspan="4" rowspan="1"style="height: 30px;">자기소개(Self Introduce)
				</td>
				</tr>
				
				<tr>
				<td colspan="4" rowspan="1"style="height: 30px;"><br>
				<textarea style="wrap:off; border: 0px" cols="48px" rows="7" name="selfInro">안녕하세요.</textarea><br><br>
				</td>
				</tr>
			</table><br>
			<table style="height: 40px;" id="table" >
				<tr>
				<td>
				<div style="padding:0px; text-align:center;">
				<input  style="background-color:#47C83E;" onclick="return myFunction()" name="registFin" value="가입하기" type="submit">
				</div>
				</td>
				</tr>
			</table>
		</form>
		<br>
		
		
	
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    
</body>
</html>