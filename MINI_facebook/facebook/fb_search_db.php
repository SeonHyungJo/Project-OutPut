<!DOCTYPE html>
<html>
	<head>
	<title>Hallo SeonHyung's FaceBook</title>
	
	<link rel="stylesheet" type="text/css" href="./fb_registerForm.css">
	<meta charset="UTF-8">
	</head>
	
	<body>
    <div id="wrapper">
        
        <?php	
			include 'fb_header.inc';
		?>
		
		<center><p style="font-size: 40px; font-weight: bold;">회원검색</p><br>
			
			<form method="post" action="fb_search_action_db.php" name="searchForm" ><br>
				
				<table style="margin-left: auto; margin-right: auto; text-align: center; width:50%; height: 30px;">
					<div style="text-align: center;vertical-align: middle; ">
						<tr >
							<td style="width:19%;">
								<a href="http://ait.kyonggi.ac.kr/~s201213829/facebook/fb_home.php">
								<img  style="vertical-align:middle; width:100%; height:30px;"src="logoFont.jpg"></a>
							</td>
							
							<td>
							<input style="text-align:left; border:0px; font-size:13px; font-weight: bold; color:#979797;" maxlength="30" size="33" name="searching" placeholder="검색할 이름/이메일을 입력해 주세요." required></td>
							
							<td style="width:20px; ">
								<input  style="border:0px; width:105%; height:105%; font-weight:bold; background-color:#47C83E; color:#FFFFFF; "  name="searchButton" value="검색하기" type="submit">
							</td>
						</tr>
					</div>
				</table>
				<br>
				<br>
				
			</form>
			
			
			
			<?php	
				include 'fb_footer.inc';
			?>
		</div>
	</body>
</html>