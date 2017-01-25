<!-- Celsius(섭씨)/Fahrenheit(화씨) 변환기 -->

<?php
    $celsius = 15;
    // 불완전한 프로그램이므로 수정해야 한다.
    $fahrenheit = (9/5)*$celsius+32;
?>
<html>
<head>
<title>섭씨/화씨 변환기</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h3>섭씨↔화씨 변환기</h3>

<p>섭씨 <?php echo $celsius?>℃ 는 화씨 <?php echo $fahrenheit?>℉ 입니다. </p>
</body>
</html> 