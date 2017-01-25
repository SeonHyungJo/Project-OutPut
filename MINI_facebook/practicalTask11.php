<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" href="./">
	<title></title>
</head>

<body>
	<form action="" method="post" name="">
	<table style="width: 300px; height: 100px; margin-left: auto; margin-right: auto; border:1px; border-style:solid; border-color: ;">
	
	<tr>
	<td>
	</td>
	</tr>
	
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



</body>
</html>