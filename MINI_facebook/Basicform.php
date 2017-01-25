<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./fb_registerForm.css">//꾸미기

	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title></title>
</head>

<body>
	<form action="" method="post" name="">//폼
	<table style="width: 300px; height: 100px; margin-left: auto; margin-right: auto; border:1px; border-style:solid; border-color: ;">
	
	<tr>
	<td>
	</td>
	</tr>
	
	</table>
	</form>

</body>
</html>


<?php
	$str = "hello";
	$str2 = "h";
	echo strlen($str) . "<br>"; //글자의 바이트수
	echo str_word_count($str). "<br>"; //진짜 글자수
	echo strcspn($str,$str2). "<br>";//첫번째 변수에서 2번째 변수의 글자가 어느 위치에 있는지알려주는 역활
	echo substr_count($str, 'l'). "<br>"; //글자수 세수는
	echo strpos($str, 'l',1). "<br>"; //글자 위치
	echo substr($str, 2,3). "<br>"; //2부터 3까지의 글자 찾기
	echo str_replace($str, 'l','o'). "<br>";
	echo $str;
	$str3 =  str_split($str,2); //str배열을 2개씩 나누어 배열로 넣음
	echo $str3[0];
	
	
echo<<<calc //히어닥
	
	<table style="width: 450px; height: 60px; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr>
		<td>
		</td>
		</tr>


	</table>
calc;
	
?>

//isset
if(isset($_POST[''])&&isset($_POST[''])){
}

//테두리 설정
style="margin-left: auto; margin-right: auto; border:1px; border-style:solid; ;"
style="border: 3px solid #47C83E;" //간단한 테두리 설정

//변수형 확인 할때
gettype($num);

//변수형 변환 
settype($num, string);

//배열 선언
$arr = array( 0 => "Alabama",
						1 => "Alaska",
						2 => "");
				
//다차원 배열 선언
$arr = array(01=>array(0 => "Alabama",
						1 => "Alaska",
						2 => "")
					02=>array(0 => "Alabama",
						1 => "Alaska",
						2 => "")
					03=>array(0 => "Alabama",
						1 => "Alaska",
						2 => "")
					); 3*3배열 완성
//배열 함수
	처음 포인터로 이동 
	reset($arr);
	현재 포인터
	current($arr);
	다음 포인터로 이동후 풀력
	next($arr);
	
//list 함수
	$arr = array("Alabama", "Alaska", "good");
	list($drink,$color,$power) = $arr;//리스트 안에 3개의 단어가 들어감

//each 함수
	현재 포인터의 key와 value를 쌍으로 가져옴 & 다음 포인터로 이동
	list($num1, $num2) = each($arr);

//foreach 함수
	foreach($arr as $value){
		echo "Value : $value <br> ";
	}
	
	foreach($arr as $key => $value){
		echo "Key : $key, Value : $value <br> ";
	}

//배열의 정렬
	sort(); 오름차순 작은값에서 큰값으로
	rsort(); 역순
	
	asort(); 값에 의한 정렬
	arsort(); 역순
	 
	ksort(); 키에 의한 정렬
	krsort(); 역순
	
//문자열을 배열로
	$str2 = str_split($str,4);
	explode(";", $str);   //;을 기준으로 나눈다

//배열을 문자열로
	$str2 = implode(",", $str);
	
	
	
//css링크걸기
<link rel="stylesheet" type="text/css" href="./">

//select
	<select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>			
		<option value="%">%</option>
	</select>
	
	
//input
<input  style="background-color:#47C83E; color:#FFFFFF;"name="searchButton" value="검색하기" type="submit">//버튼
email, button, text, radio, checkbox,
	
//submit
<input type="submit" value="결과보기">
//cencel
<input type="reset" value="취소">

//보이는 데로 글자 출력
<pre></pre>//html 태그임

//글자색
<p style="color:">
//소수점 천단위
number_format()

//문자 자르기
list($year,$month,$day) = explode("/",$)

//오늘 날짜
date("Y/m/d")

//대문자로
strtoupper($)

//반올림 내림 소수점제거
round(); floor() 

//디비 연결
<?php 


    // 1. 데이터베이스 서버와 연결 
    $db = mysql_connect("localhost","studentuser","goodstudent") or die 
        ("데이터베이스 서버연결에 실패하였습니다."); 
     
    // 2. 한글깨짐을 방지하기 위한 인코딩 설정 
    mysql_query("SET NAMES 'utf8'"); 
     
    // 3. 데이터베이스 선택 (우리가 사용하는 실습 데이터베이스 이름은 "classdb") 
	$status = mysql_select_db("classdb"); 
    if(!$status)//만약 false이면 { 
        echo "서버의 studentuser 데이터베이스연결에 실패하였습니다!<br>"; 
        exit; 
        } 
		
		
?>


//디비에서 값 꺼내오기
mysql_field_name($result, 숫자나 변수)

//디비 관련 
mysql_query()//쿼리실행
mysql_fetch_array($result)//result의 값을 배열로 정리

//디비 업데이트
mysql_query ("update fb_201213829 set password='$pw', name='$name', gender='$sex', birth_date='$birth', phone='$pn', address='$ad', status='$status', memo='$self' where email='$id'")

//디비 삭제
mysql_query ("select * from fb_201213829 where email='$id' and password='$pw';", $db)

//디비 삽입
insert into fb_201213829(name,email,password,birth_date,gender,phone,address,status,memo) values('$name','$id','$pw','$birth','$sex','$pn','$ad','$status','$self')

//알림창
echo "<script>alert(\"아이디 또는 비밀번호가 틀렸습니다.\"),
				history.back(); </script>";


//링크 걸기
<a href="http://ait.kyonggi.ac.kr/~s201213829/facebook/fb_home.php">
<link rel="stylesheet" type="text/css" href="./facebook/fb_registerForm.css">

//이미지 출력
<img  style="vertical-align:middle; width:100%; height:30px;"src="logoFont.jpg">
<img width=400px; src=http://cfile233.uf.daum.net/original/2412E24852D6678533E95A>

//비밀번호 확인
<script>
		function myFunction() {
			var pass1 = document.getElementById("password").value;//번호하나 받아옴
			var pass2 = document.getElementById("passwordCheck").value;//2번째 받아옴
			if (pass1 != pass2) {//서로비교
				alert("비밀번호가 같지 않습니다.");
			history.back();}
		}	
</script>


//html 주석
<!--    -->

//스크립트 받아오기
var num = document.getElementById("number").value;

//선긋기
<hr color=red width=30%>

//클릭시 이동
onclick="location.href='http://ait.kyonggi.ac.kr/~s201213829/facebook/fb_register_db.php'"

//글씨체
<p style='font-family:맑은고딕'>
	
//스스로에게 전송
<?php echo $_SERVER['PHP_SELF']?>

//에러 안보이게
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);정