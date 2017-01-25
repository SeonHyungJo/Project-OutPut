<!DOCTYPE html>
<html>
	
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="./">
		<title></title>
	</head>
	
	<body>
		<?php
			echo "<center><H1>[Lab 5/11, #2] 함수(function)의 정의 및 호출<hr></h1>";
			echo "1. 두 숫자 중 큰 숫자를 화면에 보여주는 함수 (larger)<br>";
			function larger ($x, $y) {
				return ($x > $y ? $x:$y);
			}
			echo larger(79, 15) . "<hr>";
			
			
			echo "2. 신체질량지수(BMI)를 계산하하여 반환하는 함수 (calc_bmi)<br>";
			function calc_bmi ($weight, $height) {
				return number_format($weight / (($height/100)*($height/100)));
			}
			$bmi = calc_bmi(72, 173); // 몸무게(Kg), 키(cm)
			echo "당신의 신체질량지수는 $bmi 입니다<br><hr>";
			
			
			echo "3. 구구단을 보여주는 함수 (multiples)<br><br>";
			function multiples ($number) {
				echo $number ."단 구구단을 보여줍니다.";
				for($num=1;$num<10;$num++){
					echo $number . " * " . $num . " = " . $num*$number . "<br>";
				}
			}
			multiples(7);
			multiples(4);
			
			echo "<hr>4. 1부터 주어진 숫자까지 합계를 반환하는 함수 (addUp)<br><br>";
			function addUp ($number) {
				$total = 0;
				echo "1부터 " . $number . "까지의 합을 반환합니다..<br>";
				for($start=1;$start<=$number;$start++){
					$total += $start;
				}
				return $total;
			}
			echo "합 : ". addUp(40) . "<br><hr>";
			
			
			
			echo "5. 배열값의 평균을 계산해서 반환하는 함수 (arrayAverage)<br><br>";
			function arrayAverage ($array) {
				$total = 0;
				//평균값 계산 후, 반환(return)
				for($num=0;$num<count($array);$num++){
					$total += $array[$num];
				}
				return ($total / count($array));
			}
			$myArray = array(21, 62, 37, 44, 57, 96, 17, 38, 99, 10, 51);
			$arr_avg = arrayAverage($myArray);
			echo "배열의 평균값: ". $arr_avg;
			
			
			
			echo "<hr>6. 숫자 배열값 중 가장 큰 숫자를 반환하는 함수 (largest)<br><br>";
			function largest ($array) {
				//최대값을 찾아 반환(return)
				$large = 0;
				for($num=1; $num<count($array);$num++){
					if($array[$num-1]>$array[$num]){
						$large = $array[$num-1];
					}
				}
				return $large;
			}
			
			$myArray = array(12,85,74,1,521,999,62,94,8,29, 456, 48, 321, 54, 722, 88, 17);
			$max = largest($myArray);
			echo "배열값 중 가장 큰 숫자는: " . $max. "<hr>";
			
			
			echo "7. 주어진 숫자가 소수(素數, prime number)인지를 체크하는 논리함수 (isPrime)<br>(Note: 소수는 양의 약수가 1과 자기 자신 뿐인 1보다 큰 자연수)<br><br>";
			
			function isPrime ($number) {
				//$number 가 소수라면 true 를 반환(return)
				//그렇지 않으면 false 를 반환
				for($num=2;$num<$number;$num++){
					if($number%$num == 0){
						echo $num . "로 나뉩니다.<br>";
						return false;
					}
				}
				
				return true;
			}
			$myNumber = 1997;  // 333333331 333327199도 시도해보라
			if(isPrime($myNumber))
			echo $myNumber . "는 소수(prime number)입니다<br>";
			else
			echo $myNumber . "는 소수가 아닙니다<br>";
			
			echo "<hr>";
			
			echo "8. 주어진 문자열이 모두 소문자인지를 체크하는 논리함수 (isLowercase)<br>
			(Note: 소수는 양의 약수가 1과 자기 자신 뿐인 1보다 큰 자연수)<br><br>";
			
			function isLowercase ($str) {
				//$str 이 모두 소문자라면 true 를 반환(return)
				//그렇지 않으면 false 를 반환
				if(ctype_lower($str)){
					return true;
				}
				else{
					return false;
				}
			}
			$myString = "goodmorning";  // 다른 문자열도 시도해보라 띄어쓰기도 인식
			if (isLowercase($myString))
			echo $myString . "는 모두 소문자 입니다.";
			else
			echo $myString . "는 소문자가 아닌 것이 존재합니다.";
			echo "<hr>";
			
			
			
			echo "9. 가로와 세로 길이를 숫자로 주어지면 사각형의 면적을 반환하는(calArea)<br>
			(문자열에 빈칸, 쉽표 등은 무시한다. 즉, Red rum, sir, is murder 도 palindrome)<br><br>";
			
			function calArea ($length, $width) {
				//사각형의 면적을 반환
				return $length*$width;
			}
			echo "사각형의 면적은 : " . calArea(13,13) . "입니다.<hr>";
			
			
			echo "10. 주어진 문자열이 palindrome (왼쪽으로 읽으나 오른쪽으로 읽으나 같은 단어)인지를 체크하는 논리함수 (isPalindrome)<br><br>";
			
			
			function isPalindrome($str) {
				//$str 이 palindrome 이면 true 를 반환(return)
				//그렇지 않으면 false 를 반환
				for($num=0;$num<=(int)($str/2);$num++){
					if(substr($str,$num,1)!=substr($str,-($num+1),1)){
						return false;
					}
				}
				return true;
			}
			$palindrome  = "abcdfgfdcba";  // "A nut for a jar of tuna"
			if (isPalindrome($palindrome)){
				echo $palindrome . "는 왼쪽으로 읽으나 오른쪽으로 읽으나 같은 단어입니다.";
			}
			else{
				echo "다른 단어로 확인해주세요";
			}
			
			
			
		?>
	</body>
</html>
