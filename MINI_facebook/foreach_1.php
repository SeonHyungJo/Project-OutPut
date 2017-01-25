<html>
	<head>
		<title>[Lab 5/4, #1] 배열함수 (정렬, 반복작업 등)</title>
	</head>
	
	
	<body>
		<?php
			$expenses = array(12, 45, 10, 25, 32, 9, 58);
			
			
			$city = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
			
			
			$number = 0;
			$sum = 0;
			foreach($expenses as $value){
				$sum += $value;
				$number++;
			}
			$average = number_format($sum/count($expenses),2);
			//-----------------------------------------------------------------------------------------------
			
			ksort($city);
			
			foreach($city as $key => $value){//담에 보안하자
				
				echo <<<str
				<table style="border:1px solid; width: 450px; height: auto; margin-left: auto; margin-right: auto;"><tr><td>$key 의 수도는 $value 입니다.</table> 
str;
			}
			
	echo <<<total
			<table style="width: 450px; height: auto; margin-left: auto; margin-right: auto;">
			<tr>
			<td colspan="3" rowspan="1" style="height:50px; text-align:center;" >[실습 #1, foreach]
			</td>
			</tr>
			
			<tr>
			<td>
			<p style="font-size:20px; font-weight:bold;"></p>
			<hr color=blue size=3px>
			
			합계 : $sum
			평균 : $average
			
			<hr color=blue size=3px>	
			</td>
			</tr>
			
			</table>
total;
			
		?>
			
		</body>
</html>						