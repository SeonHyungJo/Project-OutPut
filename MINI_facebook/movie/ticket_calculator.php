<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's FaceBook</title>

<link rel="stylesheet" type="text/css" href="./movie_layout.css">
<link rel="stylesheet" type="text/css" href="./movie_movie.css">

<meta charset="UTF-8"></head><body>
    <div id="wrapper">
        
       <div id="header">      
			<p style="text-align:left; color:#FFF; font-weight:bold; font-size:40px; ">CGV</p>
        </div>
       
       
        <div id="navigation">
          <ul id="menu-bar">
			<li><a href="ticket_home.html">홈</a></li>
			<li><a href="ticket_movie.html">영화</a></li>
			<li class="active"><a href="ticket_calculator.html">예매</a></li>
		</ul>
        </div>
        
       
		<div id="content" style="text-align: center;">
<?php
	$chooseMovie = $_POST['movie'];
	if($chooseMovie==1){$picture ="./image/1.jpg";}
	elseif($chooseMovie==2){$picture ="./image/2.jpg";}
	elseif($chooseMovie==3){$picture ="./image/3.jpg";}
	elseif($chooseMovie==4){$picture ="./image/4.jpg";}
	elseif($chooseMovie==5){$picture ="./image/5.jpg";}
	elseif($chooseMovie==6){$picture ="./image/6.jpg";}
	elseif($chooseMovie==7){$picture ="./image/7.jpg";}
	elseif($chooseMovie==8){$picture ="./image/8.jpg";}
	elseif($chooseMovie==9){$picture ="./image/9.jpg";}
	else{$picture ="./image/10.jpg";}
	$adultCost = 10000;
	$childCost = 8000;
	$adultTotal = $_POST['num_adult']*$adultCost;
	$childTotal = $_POST['num_child']*$childCost;
	$totalCost = ($_POST['num_adult']*$adultCost) + ($_POST['num_child']*$childCost);
	$total = $_POST['num_adult']+$_POST['num_child'];
	$str = <<<total

	<table style="width: 450px; height: 60px; margin-left: auto; margin-right: auto;">
	<tbody>
		<tr align="center">
		<td style="color:#BD5C24; font-size:30px; font-weight:bold;" colspan="3" rowspan="1">영화티켓 비용 계산 결과
		</td>
		</tr>	
	</table><br>

	<table style="width: 450px; height: auto; margin-left: auto; margin-right: auto;">
		
		<tr style="height:30px;">
		<td colspan="3" rowspan="1">
		<image style="width:200px;"src='$picture'>
		</td>
		</tr>

		<tr style="height:30px;">
		<td colspan="2" rowspan="1">관람극장
		</td>
		<td style="text-align: center;">
		$_POST[location]
		</td>
		</tr>

		<tr style="height:30px;">
		<td colspan="2" rowspan="1">관람날짜
		</td>
		<td>
		$_POST[date]
		</td>
		</tr>

		<tr style="height:30px;">
		<td >일반/10,000원
		</td>
		<td>
		$_POST[num_adult]인
		</td>
		<td>
		$adultTotal 원
		</td>
		</tr>

		
		<tr style="height:30px;">
		<td>청소년/8,000원
		</td>
		<td>
		$_POST[num_child]인
		</td>
		<td>
		$childTotal 원
		</td>
		</tr>
		
		<tr style="height:30px;">
		<td colspan="3" rowspan="1">
		총 $total 명으로 총 금액은 <span style="font-weight:bold">$totalCost</span>원 입니다.
		</td>
		</tr>

	</tbody>
	</table>
total;
echo "$str";
?>
		</div>
      
        
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>