<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>계산기</title>
	<link rel="stylesheet" type="text/css" href="./facebook/fb_registerForm.css">
</head>

<body><br><br>
	<form action="calculator.php" method="post" name="numTable">
	<table style="width: 300px; height: 100px; margin-left: auto; margin-right: auto;">
	<tr>
	<td colspan="2" rowspan="1" style="font-size:20px">
	<p>계산 하려는 2개의 <br>숫자를 입력해주세요.</p>
	</td>
	</tr>

	<tr>
	<td style="height:25px;">
	<input style="border:0; text-align:center;" name="num1" size="7px" placeholder="첫번째 숫자"  required>
	</td>
	<td>
	<input style="border:0; text-align:center;" name="num2" size="7px" placeholder="두번째 숫자" required>
	</td>
	</tr>

	<tr>
	<td colspan="2" rowspan="1">
	<input type="submit" name="start" value="계산하기">
	</td>
	</table>
	</form>

<hr>
<?php
	if(isset($_POST['start'])){
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$sum = $num1 + $num2;
	$sub = $num1 - $num2;
	$mul = $num1 * $num2;
	$div = $num1 / $num2;
	$rest = $num1 % $num2;
	
	
	
	$str = <<<calc
	<br><table style="width: 450px; height: 60px; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr>
		<td colspan="2" rowspan="1" style="font-size:20px"><p>{$num1}과 {$num2}의 계산결과는 다음과 같습니다.</p>
		</td>
		
		</tr>

		<tr>
		<td style="width:50%"><p>덧셈</p>
		</td>
		<td>$num1 + $num2 = $sum
		</td>
		</tr>
		
		<tr>
		<td><p>뺄셈</p>
		</td>
		<td>$num1 - $num2 = $sub
		</td>
		</tr>

		<tr>
		<td><p>곱셈</p>
		</td>
		<td>$num1 * $num2 = $mul
		</td>
		</tr>

		<tr>
		<td><p>나누기</p>
		</td>
		<td>$num1 / $num2 = $div
		</td>
		</tr>

		<tr>
		<td><p>나머지</p>
		</td>
		<td>$num1 % $num2 = $rest
		</td>
		</tr>
	</table><br>
calc;
echo "$str";
}
?>
	<br>
	</form>
</body>
</html>

