<html>

<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>영화티켓 비용 계산기</title>
	<link rel="stylesheet" type="text/css" href="./fb_layout.css">
</head>

<body>
<?php
	$adultCost = 10000;
	$childCost = 8000;
	$adultTotal = $_POST['num_adult']*$adultCost;
	$childTotal = $_POST['num_child']*$childCost;
	$totalCost = ($_POST['num_adult']*$adultCost) + ($_POST['num_child']*$childCost);
	$total = $_POST['num_adult']+$_POST['num_child'];
	$str = <<<total
	<table style="width: 450px; height: 60px; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr align="center">
		<td style="color:#BD5C24; font-size:40px; font-weight:bold;" colspan="3" rowspan="1">영화티켓 비용 계산 결과
		</td>
		</tr>
	
		<tr>
		<td colspan="3" rowspan="1" style="height:50px; text-align:center;" >
		<img src="./Zootopia.jpg" style="width: 250px; height: 300px;"></img>
		</td>
		</tr>
	</table><br>

	<table style="width: 450px; height: auto; margin-left: auto; margin-right: auto;">
		<tr>
		<td colspan="3" rowspan="1" style="height:50px; text-align:center;" >
		<p style="font-size:20px; font-weight:bold;">가격표</p>
		<hr color=blue>	
			일반 10,000원<br>
			청소년 8,000원
		</td>
		</tr>

		<tr style="height:30px;">
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">일반
		</td>
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">
		$_POST[num_adult]인
		</td>
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">
		$adultTotal 원
		</td>
		</tr>

		
		<tr style="height:30px;">
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">청소년<br>
		</td>
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">
		$_POST[num_child]인
		</td>
		<td style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">
		$childTotal 원
		</td>
		</tr>
		
		<tr style="height:30px;">
		<td colspan="3" rowspan="1" style="border: 3px ; border-style: solid; border-color: #47C83E; text-align: center;">
		총 $total 명으로 총 금액은 <span style="font-weight:bold">$totalCost</span>원 입니다.
		</td>
		</tr>

	</tbody>
	</table>
total;
echo "$str";
?>
	<br>
	</form>
</body>
</html>

