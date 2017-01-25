<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>
	
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
			
			$id = $_POST['id'] ;
			$pw = $_POST['password'];
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$birth = $_POST['birth'];
			$pn = $_POST['phoneNum'];
			$ad = $_POST['address'];
			$status = $_POST['maritalStatus'];
			$self = $_POST['selfInro'] ;
			
			
			$query = "update fb_201213829 set password='$pw', name='$name', gender='$sex', birth_date='$birth', phone='$pn', address='$ad', status='$status', memo='$self' where email='$id' ";
			
			$tb3 = mysql_query($query);
			$rows = mysql_affected_rows(); 
			echo "<script>alert(\"수정이 완료되었습니다.\");</script>";
			echo<<<calc
			<table style="width: 450px; height:300px; margin-left: auto; margin-right: auto;">
			<tbody>
			
			<tr>
			<td>아이디</td>
			<td>$id</td>
			</tr>
			
			<tr>
			<td>비밀번호</td>
			<td>$pw</td>
			</tr>
			
			<tr>
			<td>이름</td>
			<td>$name</td>
			</tr>
			
			<tr>
			<td>성별</td>
			<td>$sex</td>
			</tr>
			
			<tr>
			<td>핸드폰 번호</td>
			<td>$pn</td>
			</tr>
			
			<tr>
			<td>주소</td>
			<td>$ad</td>
			</tr>
			
			<tr>
			<td>결혼여부</td>
			<td>$status</td>
			</tr>
			
			<tr>
			<td>메모</td>
			<td>$self</td>
			</tr>
			
			</table><br>
			
calc;
		
		
		mysql_close($db);
		?>
		
		
        <?php	
			include 'fb_footer.inc';
		?>
		
	</body>
</html>