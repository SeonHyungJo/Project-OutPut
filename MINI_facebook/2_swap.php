<?php

echo "<h4>php 프로그래밍 연습 (2) - Swap (두 변수의 값을 서로 교환)</h4><hr color=blue>";

// 두 변수값을 임의로 지정한다
$a = 111;
$b = 999;

// 교환하기 전에 두 변수 값을 화면에 보여준다
echo "<p>교환하기 전 변수 값</p>";
echo "<p>a값은 $a 이고, b값은 $b 입니다</p>";  // a값은 111 이고, b값은 999 입니다

//-------------------
$temp = $a;
$a = $b;
$b = $temp;
//-------------------

// 교환 후, 두 변수 값을 화면에 보여준다
echo "<p><hr color=red width=30% align=left>교환한 후 변수 값</p>";
echo "<p>a값은 $a 이고, b값은 $b 입니다</p>";  // a값은 999 이고, b값은 111 이다

?>