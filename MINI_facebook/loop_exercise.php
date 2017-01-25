<!DOCTYPE html>
<html>
	
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		
		<title></title>
	</head>
	
	<body>
		<center><h1>[실습과제 #9] 반복문</h1>
		<hr color="green">
			
<?php
	
	
	echo "1번 문제 <br>";
	for($num1=1;$num1<=10;$num1++){
		echo ($num1==10) ? $num1 : $num1."-";//num1이 10이 아니면 숫자+'-'출력 10일때는 출력안함
	}
	
	echo "<hr>";
	
	echo "2번 문제<br>";
	$total_2 = 0;
	echo "1부터 30까지의 합: ";
	for($num2=1;$num2<=30;$num2++){
		$total_2 += $num2;//숫자들을 total_2에 다 저장
	}
	echo $total_2;
	
	echo "<hr>";

	echo "3번 문제<br><table align='center'><tr><td>";
	for($num3_1=1;$num3_1<=5;$num3_1++){
		for($num3_2=1;$num3_2<=$num3_1;$num3_2++){
			echo "*";
		}
		echo "<br>";
	}
	
	echo "</td></tr></table><hr>";
	
	echo "4번 문제<br><table align='center'><tr><td>";
	
	for($num4_1=1;$num4_1<=10;$num4_1++){//중첩 for문 하나로 해결 성공
		for($num4_2=1;$num4_2<=(($num4_1<=5)? $num4_1%6 : 5-$num4_1%6);$num4_2++){	
			echo "*";
		}
		echo "<br>";
	}

	echo "</tr></td></table><hr>";
	
	$total_5 = 1;
	echo "5번 문제<br>";
	for($num5=9;$num5>=1;$num5--){
		$total_5 *= $num5;
	}
	echo "9! = " . $total_5;
	
	echo "<hr>";
	
	echo "6번 문제<br>";
	for($num6_1=0;$num6_1<=9;$num6_1++){ 
		for($num6_2=0;$num6_2<=9;$num6_2++){ 
			echo (($num6_1==9)&&($num6_2==9)) ? $num6_1 . $num6_2 . " " : $num6_1 . $num6_2 . ", " ;
		}
		echo "<br>"; 
	}

	echo "<hr>";
	
	$text = "Hyun-Jin Ryu (shoulder) threw all of his pitches during a 45-pitch bullpen session Tuesday. It's the first time the left-hander has thrown off a mound since being placed on the DL in late April with left shoulder inflammation. The Dodgers have said it's possible Ryu won't need to go out on a rehab assignment, so he's moving closer to a return to the rotation." ;
	
	
	echo "7번 문제<br>";//substr_count함수를 사용해서 r찾기
	echo "r의 개수 : " . substr_count($text, 'r')."개";
	
	echo "<hr>";
	
	echo "8번 문제<br>";
	echo "<table style='border:1px; border-style:solid;' cellpadding='3px' cellspacing='0px'>";
	for($num8_1=1;$num8_1<=6;$num8_1++){ 
		echo "<tr >"; 
		for($num8_2=1;$num8_2<=5;$num8_2++){ 
			echo "<td style='border:1px; border-style:solid;'>" . $num8_1 . " * " . $num8_2 . " = " . $num8_1*$num8_2 . "</td>" ;
		}
		echo "</tr>";
	}echo "</table>";
	
	echo "<hr>";
	
	
	echo "9번 문제<br>";
	echo "<table style='border:1px; border-style:solid; text-align:center; width:400px; height:400px;'cellspacing='0px'>";	
	for($num9_1=0;$num9_1<9;$num9_1++){ 
		echo "<tr>"; 
		for($num9_2=0;$num9_2<9;$num9_2++){ 
			if((($num9_1+$num9_2)%2)==0){
				echo "<td>";
			}else{
				echo "<td bgcolor='black'>";
			}
			echo "</td>";
		}
		echo "</tr>";
	}echo "</table>";
	
	echo "<hr>";
	
	echo "10번 문제<br>";
	echo "<table style='border:1px; border-style:solid; text-align:center; width:400px; height:400px;'cellspacing='0px'>";	
	for($num10_1=1;$num10_1<=10;$num10_1++){ 
		echo "<tr>"; 
		for($num10_2=1;$num10_2<=10;$num10_2++){ 
			echo "<td style='border:1px; border-style:solid; width:40px;' >" . $num10_1*$num10_2 . "</td>";;	
		}
		echo "</tr>";
	}
	echo "</table>" ; 
	
	echo "<hr>";
	
	echo "11번 문제<br>";
	
	for($num11=1;$num11<=100;$num11++){ 
		if(($num11%3)==0 && ($num11%5)==0){
			echo "앗싸";
		}elseif(($num11%3)==0){
			echo "앗";
		}elseif(($num11%5)==0){
			echo "싸";
		}else{
			echo $num11;
		}
		
		if(($num11%10)==0){
			echo ", <br>";
		}else{
			echo ", ";
		}
		
	}
	
?>
	
	
	
				
	</body>
</html>
				
						