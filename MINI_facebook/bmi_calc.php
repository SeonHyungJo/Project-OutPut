<html>
	<head>
	<title>BMI 결과</title>
	</head>
	
	
	<body>
<?php

	$weight = $_POST['kg'];
	$height = $_POST['cm'];
	$heightM = $height/100;//미터로 변환
	$averKG = 22*($heightM*$heightM);
	$gapKG = ($weight-$averKG);
	$BMI = $weight/($heightM*$heightM);
	$round = round($BMI,2);//소수점 제거
	
	
	
echo <<<total
	<table style="width: 450px; height: auto; margin-left: auto; margin-right: auto;">
		<tr>
		<td colspan="3" rowspan="1" style="height:50px; text-align:center;" >
		<p style="font-size:20px; font-weight:bold;"></p>
		<hr color=blue>	
			입력하신 체중은 {$weight}Kg이고 신장은 {$height}cm 입니다. <br><br>	
			귀하의 BMI(신체질량지수)는 {$round}입니다.
		<hr color=blue>	
			입력하신 신장은 {$height}cm 에 적절한 체중은 {$averKG}Kg 입니다.<br>
			(이상적인 BMI 지수가 22 라고 가정했을 경우)<br>

			귀하는 {$gapKG}Kg 초과하였습니다.
		</td>
	</table>
total;
?>

	<body>
<html>