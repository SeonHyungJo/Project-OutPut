<html>
	<head>
	<title>검색 결과 화면</title>
	</head>
	<body>
	<pre>
	
<?php
$players = array (
				"001" => array ("name" => "추신수", "birthdate" => "1982/7/13", "email" =>"sschoo@rangers.com"),
				"002" => array ("name" => "류현진", "birthdate" => "1987/3/25", "email" => "hjryu@dodgers.com"),	
				"003" => array ("name" => "김연아", "birthdate" => "1990/9/5", "email" => "yunakim@skate.com"),		
				"004" => array ("name" => "이대호", "birthdate" => "1982/6/21", "email" => "dhlee@mariners.com"),
				"005" => array ("name" => "전지현", "birthdate" => "1981/10/30", "email" => "jhjun@ddanddala.com")
				);
	$num = $_POST["player"];//print_r($players); //선수 명단 출력
//--------------------------------------------------------------------------------------
	list($year,$month,$day) = explode("/",$players[$num]['birthdate']);//생일로 연,월,일 분리
	list($E_name,$mail) = explode("@",$players[$num]['email']);
	list($team,$com) = explode(".",$mail);//소속출력 2번째 방법
	$now = date("Y/m/d");
//--------------------------------------------------------------------------------------
	$team = strtoupper($team);//소속을 대문자로 변경
	$age =  date("Y") - $year; //나이계산: 현재 연도 - 생일연도
	$days = number_format((strtotime($now) - strtotime($players[$num]['birthdate']))/86400);//현재 날짜를 초로 바꾸어서 뺀후 일수로 바꿈_넘버포맷으로 천자리 점찍기
	
//--------------------------------------------------------------------------------------
	//$team = strtoupper(substr($players[$num]['email'], strpos($players[$num]['email'], "@")+1, strpos($players[$num]['email'],".") - strpos($players[$num]['email'], "@")-1)); //소속을 찾는 함수 substr로 문자를 자르는 것_ strpos로 문자열의 위치를 파악하여 @와 .사이의 문자 출력 _1번째 방법으로 소속출력

echo<<<EOL
	<table style="font-weight:bold; border: 3px ; border-style: solid; border-right:0; border-left:0; border-color: #47C83E; text-align:center; width:500px; height:300;" align="center">
	<tr>
	<td colspan="4"><h1>요청하신 정보는 아래와 같습니다.</h1>
	</td>
	</tr>
	
	<tr>
	<td>PID
	</td>
	<td>{$num}
	</td>
	</tr>
	
	<tr>
	<td>이름
	</td>
	<td>{$players[$num]['name']}
	</td>
	</tr>
	
	<tr>
	<td>생일
	</td>
	<td>{$players[$num]['birthdate']}
	</td>
	</tr>

	<tr>
	</tr>

	<tr>
	<td>이메일
	</td>
	<td>{$players[$num]['email']}
	</td>
	</tr>
	
	<tr>
	<td>나이
	</td>
	<td>{$age}세
	</td>
	</tr>

	<tr>
	<td>이제껏 살아온 날수
	</td>
	<td>{$days}일
	</td>
	</tr>

	<tr>
	<td>소속
	</td>
	<td>{$team}
	</td>
	</tr>
	
	<tr>
	<td colspan="2"><input type="button" value="뒤로가기" onclick="history.back()">
	</td>
	</tr>
	</table>
EOL;
	print_r($players);//php안에서만 작동
?>
	
	</pre>
	<body>
<html>