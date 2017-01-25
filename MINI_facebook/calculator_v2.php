<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" href="./facebook/fb_registerForm.css">
	<title>[실습과제 #8] 알파고 계산기</title>
</head>

<body><br><br>
	<form action="calculator_v2.php" method="post" name="numTable">
	<table style="width: 300px; height: 100px; margin-left: auto; margin-right: auto;" >
	<tr>
	<td colspan="3" rowspan="1" style="font-size:20px">
	<p>계산 하려는 2개의 <br>숫자를 입력해주세요.</p>
	</td>
	</tr>

	<tr>
	<td style="height:25px;">
	<input style="border:0; text-align:center;" name="num1" size="7px" placeholder="첫번째 숫자"  required>
	</td>
	<td>
	<select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>			
		<option value="%">%</option>
	</select>
	</td>
	<td>
	<input style="border:0; text-align:center;" name="num2" size="7px" placeholder="두번째 숫자" required>
	</td>
	</tr>

	<tr>
	<td colspan="3" rowspan="1">
	<input type="submit" value="계산하기">
	</td>
	</table>
	</form>


<?php
	if(isset($_POST['num1'])&&isset($_POST['num2'])){
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$total = "";
	$str = "";
	if($_POST['operator']=="+"){
		$total = $num1+$num2;
		$str = "덧셈";
	}elseif($_POST['operator']=="-"){
		$total =  $num1-$num2;
		$str = "뺄셈";
	}elseif($_POST['operator']=="*"){
		$total = $num1*$num2;
		$str = "곱셈";
	}elseif($_POST['operator']=="/"){
		$total =$num1/$num2;
		$str = "나눗셈";
	}else{
		$total =$num1%$num2;
		$str = "나머지";
	}
			
	echo<<<calc
	<hr>
	<table style="width: 450px; height: 60px; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr>
		<td colspan="2" rowspan="1" style="font-size:20px"><p>{$num1}과 {$num2}의 계산결과는 다음과 같습니다.</p>
		</td>
		
		</tr>

		<tr>
		<td style="width:50%"><p>$str</p>
		</td>
		<td>{$num1} {$_POST['operator']} {$num2} = $total
		</td>
		</tr>
		
		
	</table><br>
calc;

	}
?>
	<br>
	</form>
</body>
</html>

