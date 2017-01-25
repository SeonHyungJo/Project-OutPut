<html>
	<head>
	<title>BMI 결과</title>
	</head>
	
	
	<body>
<?php

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
		<td colspan="3" rowspan="1" style="height:50px; text-align:center;" >
		<p style="font-size:20px; font-weight:bold;"></p>
		<hr color=blue>	
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
		<br>
		<input action="action" type="button" value="다시하기" onclick="history.go(-1);">
		</td>
		</tr>
	</table>
total;
?>

	<body>
<html>