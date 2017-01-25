
<!-- Celsius/Fahrenheit converter -->


<html>
<head>
<title>섭씨/화씨 변환기</title>
<link rel="stylesheet" type="text/css" href="my-style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h3 class=red>섭씨↔화씨 변환기</h3>


<?php
	if ($_POST['temperature']){
		$c = $_POST['temperature'];
	}
	
	$f = (9/5) * $c +32;
	echo "<p>입력하신 온도는 $c ℃ 입니다. </p>";
	echo "<p>화씨온도는 $f ℉ 입니다. </p>";
?>




<P>&nbsp;</P>
<P><img src="http://indianajane87.files.wordpress.com/2013/03/temperature_conv.gif"></P>

</body>
</html>