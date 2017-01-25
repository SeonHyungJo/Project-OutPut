<html>
	<head>
	<title>BMI 계산기</title>
	</head>
	
	
	<body>
<?php
	if(isset($_POST['kg'])&&isset($_POST['cm'])){//if(isset($_POST['submitButton']))버튼을 눌렀냐 안눌렀냐
		$weight = $_POST['kg'];
		$height = $_POST['cm'];
		$heightM = $height/100;
		$averKG = 22*($heightM*$heightM);
		$gapKG = abs($weight-$averKG);
		$str = "";
		$BMI = $weight/($heightM*$heightM);
		$round = round($BMI);
	
	if($round>=20 && $round<=24){
		$str = "귀하의 체중은 정상체중입니다.";
	}elseif($round>=25 && $round<=29){
		$str = "귀하의 체중은 과체중입니다. ". $gapKG . "KG 더 빼세요.";
	
	}elseif($round>=30){
		$str = "귀하의 체중은 비만체중입니다. ". $gapKG . "KG 더 빼세요.";
	
	}else{
		$str = "귀하의 체중은 저체중입니다. ". $gapKG . "KG 부족합니다.";
	}
	
	
	
echo <<<total
	<table style="width: 450px; height: auto; margin-left: auto; margin-right: auto;">
		<tr>
		<td style="height:50px; text-align:center;" >
		입력하신 체중은 {$weight}Kg이고 신장은 {$height}cm 입니다. <br><br>	
			귀하의 BMI(신체질량지수)는 {$round}입니다.
		<hr color=blue>		
		</td>
		
		<tr align="center">
		<td>
		20 미만: 저체중<br>
		20-24: 정상<br>
		25-29: 과체중<br>
		30 이상: 비만<br>
		</td>
		</tr>
		
		<hr color=blue>	
		
		</td>
		<tr>
		<td>
		<hr color=blue>	
		입력하신 신장은 {$height}cm 에 적절한 체중은 {$averKG}Kg 입니다.<br>
		(이상적인 BMI 지수가 22 라고 가정했을 경우)<br>

		<br>
		$str
		<hr color=blue>
		</td>
		</tr>
	</table>
total;
	}
?>
	
	<form name="BMI_form" action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
	<table style="height:400px; width: 700px; margin-left: auto; margin-right: auto;">
		<tr>
		<td style="color:#EDA900;"><H1>BMI 계산기
		</td>
		</tr>
		
		<tr>
		<td style="color:#4FC9DE">신체질량지수(Body Mass Index: BMI, 카우프지수)는 비만도를 즉정하는 지표입니다.<br>
		BMI를 계산하기 위해서는 체중(kg 단위)과 신장(cm 단위) 값이 필요합니다.<br>
		귀하의 체중과 신장을 입력하여 주세요
		</td>
		</tr>
		
		<tr>
		<td>체중(KG): <input style="border:1 solid green; height:20;"type="number" size="5" name="kg" min="0" required>
		</td>
		</tr>
		
		<tr>
		<td>신장(cm): <input style="border:1 solid green; height:20;" type="number" size="10" pattern="[0-9]{3}"  min="0" name="cm" required>
		</td>
		</tr>
		
		<tr>
		<td><input type="submit" name="submitButton" size="10px" value="제출하기"> &nbsp &nbsp <input type="reset" size="10px" value="취소하기">
		</td>
		</tr>
	</form>

	<body>
<html>