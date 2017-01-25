<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>
	<script>
		function myFunction() {
			var pass1 = document.getElementById("password").value;
			var pass2 = document.getElementById("passwordCheck").value;
			if (pass1 != pass2) {
				alert("비밀번호가 같지 않습니다.");
			}
		}	
	</script>
	<link rel="stylesheet" type="text/css" href="./fb_layout.css">
	<link rel="stylesheet" type="text/css" href="./fb_menu.css">
	<link rel="stylesheet" type="text/css" href="./fb_registerForm.css">
	
	<meta charset="UTF-8"></head><body>
    <div id="wrapper">
        
        <?php	
			include 'fb_header.inc';
		?>
		<?php
			include 'db_connect.inc';
			
			$id = $_POST['id'];
			$pw = $_POST['password'];
			
			$query = "select * from fb_201213829 where email='$id' and password='$pw'";
			
			$result = mysql_query ($query);   
			$num = mysql_num_rows($result);
			$rows = mysql_fetch_array($result);	
			
			$id = $rows['email'];
			$pw = $rows['password'];
			$name = $rows['name'];
			$sex = $rows['gender'];
			$gender = "";
			$phoneNum = $rows['phone'];
			$birth = $rows['birth_date'];
			$address = $rows['address'];
			$status = $rows['status'];
			$marry = "";
			$memo = $rows['memo'];
			
			
			//성별 if문_미리 선언을 해서 heredoc안에 넣음
			if($sex=="남"){
				$gender = "<input style='text-align:center; font-weight: bold;' name='sex' value='남' type='radio' checked='checked'>&nbsp;<span style='font-weight: bold;'>남자
				</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input style='text-align:center;' name='sex' value='여' type='radio'>&nbsp;<span style='font-weight: bold;'>여자</span>";
			}	
			else{
				$gender = "<input style='text-align:center; font-weight: bold;' name='sex' value='남' type='radio' >&nbsp;<span style='font-weight: bold;'>남자
				</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<input style='text-align:center;' checked='checked' name='sex' value='여' type='radio'>&nbsp;<span style='font-weight: bold;'>여자</span>";
			}
			if($status=="기혼"){
			
				$marry = "<input checked=checked name='maritalStatus' value='기혼' type='radio'>&nbsp;기혼&nbsp;
				<input name='maritalStatus' value='연애중' type='radio'>연애중 &nbsp;
				<input name='maritalStatus' value='솔로' type='radio'>솔로&nbsp;<br>";
				
			}elseif($status=="연애중"){
				
				$marry = "<input  name='maritalStatus' value='기혼' type='radio'>&nbsp;기혼&nbsp;
				<input checked=checked name='maritalStatus' value='연애중' type='radio'>연애중 &nbsp;
				<input  name='maritalStatus' value='솔로' type='radio'>솔로&nbsp;<br>";
				
			}elseif($status=="솔로"){
				
				$marry = "<input  name='maritalStatus' value='기혼' type='radio'>&nbsp;기혼&nbsp;
				<input  name='maritalStatus' value='연애중' type='radio'>연애중 &nbsp;
				<input checked=checked name='maritalStatus' value='솔로' type='radio'>솔로&nbsp;<br>";
			}
			
			if($num==1){
				echo<<<EOT
				<div id="content">
				<div style="text-align: center;"><p style="font-size: 40px; font-weight: bold;">회원수정</p><br>
				</div>
				
				<form method="post" style="width: 100%;"action="fb_update_action_process_db.php" name="login">
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
				<input style="text-align:center; border:0px; font-size:20px " maxlength="30" type="email" size="20" name="id" value={$id} required readonly>
				<br>
				</td>
				</table>
				</td>
				</tr>
				
				<tr>
				<td style="height:50px; font-size:10px; text-align:left; font-weight:bold;;">&nbsp;&nbsp;&nbsp;* 비밀번호<br><br>
				<table id="table" style="width:80%; height:30%;">
				<td>
				<input id="password" style="text-align:center; border:0px; font-size:15px" maxlength="10" size="20" name="password" value={$pw} type="password" required><br>
				</td>
				</table>
				</td>
				</tr>	
				
				<tr>
				<td style="height:50px; font-size:10px; text-align:left; font-weight:bold;;">
				&nbsp;&nbsp;&nbsp;* 비밀번호 확인<br><br>
				<table id="table" style="width:80%; height:30%;">
				<td>
				<input id="passwordCheck" style="text-align:center; border:0px; font-size:15px" maxlength="10" size="20" name="passwordCheck" value={$pw} type="password" required>
				</input><br>
				</td>
				</table>
				</table>
				<br>
				
				
				
				<table style="height: 260px"  id="table" >
				
				<tr>
				<td colspan="2" rowspan="1" style="width: 50%; font-size: 15px; vertical-align: middle;" >
				*&nbsp;이름(name)
				</td>
				<td colspan="2" rowspan="1" style="height: 30px; width:50%" >
				<input style="text-align:center; border:0px; font-size:15px; maxlength="5" size="10" name="name" value={$name}  required><br>
				</td>
				</tr>
				
				<tr>
				<td colspan="4" rowspan="1" style="height: 30px">
				$gender
				</td>
				</tr>
				
				<tr>
				<td colspan="2" rowspan="1" style="height: 30px">생일
				<div style="font-size:12px; text-align:center;">(Date if birth)</div>
				</td>
				
				<td colspan="2" rowspan="1"style="height: 30px;">
				<input style="text-align:center; border:0px; font-size:13px; color:#979797;" maxlength="4" size="5" name="birth" value={$birth} type="date">
				</td>
				
				</tr>
				
				<tr>
				<td colspan="2" rowspan="1"style="height: 40px; ">핸드폰번호<br>
				<div style="font-size:12px; text-align:center;">(Phone Number)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<input style="text-align:center; border:0px; font-size:15px; maxlength="11" size="15"  name="phoneNum" value={$phoneNum} >
				</td>
				</tr>
				
				<tr>
				<td colspan="2" rowspan="1"style="height: 30px">주소<br>
				<div style="font-size:12px; text-align:center;">(Adseress)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<input style="text-align:center; border:0px; font-size:14px" maxlength="40" size="25" name="address" value={$address}>
				</td>
				</tr>
				
				<tr>
				<td colspan="2" rowspan="1"style="height: 50px;">연애/결혼 여부
				<div style="font-size:12px; text-align:center;">(Check)</div>
				</td>
				<td colspan="2" rowspan="1"style="height: 30px">
				<div style="font-size:12px; text-align:left">
				$marry
				</td>
				</div>
				</tr>
				
				<tr>
				<td colspan="4" rowspan="1"style="height: 30px;">자기소개(Self Introduce)
				</td>
				</tr>
				
				<tr>
				<td colspan="4" rowspan="1"style="height: 30px;"><br>
				<textarea style="wrap:off; border: 0px" cols="48px" rows="7" name="selfInro">$memo</textarea><br><br>
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
				<br>
				</form>
				</div>
EOT;

				}else{
				echo "해당하는 회원은 없습니다.";
				}
				
				
				
				mysql_close($db);
?>
<?php	
				include 'fb_footer.inc';
?>
				</div>
				</body>
			</html>										