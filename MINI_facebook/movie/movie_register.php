<!DOCTYPE html>
<html><head><title>Hallo SeonHyung's  Movie World</title>

<link rel="stylesheet" type="text/css" href="./movie_layout.css">


<meta charset="UTF-8"></head><body>
    <div id="wrapper">
        
        <div id="header">
            <table>
			<tr><td><p style="color:#FFF; font-weight:bold; font-size:40px; ">CGV</p></td>
			<td></td></tr>
			</table>
        </div>
       
       
        <div id="navigation">
         <ul id="menu-bar">
			<li><a href="ticket_calculator.html">홈</a></li>
			<li><a href="movie_movie">영화</a></li>
			<li  class="active"><a href="movie_register">예매</a></li>
		</ul>
        </div>
        
       
		<div id="content" style="text-align: center;">
		<form method="post" action="ticket_calculator.php"name="ticket_calculator_form">
			<table style="width:100%">
			<tr>
			<td>
			<img  style="width:100px; height:150px;" src="./image/1.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=140718'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/2.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=130850'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/3.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=124025'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/4.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=136876'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/5.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=134856'" alt="">
			</td>
			</tr>
	
			<tr>
			<td>
			<input type="radio" name="movie" value="1" checked="checked">
			</td>
			<td>
			<input type="radio" name="movie" value="2">
			</td>
			<td>
			<input type="radio" name="movie" value="3">
			</td>
			<td>
			<input type="radio" name="movie" value="4">
			</td>
			<td>
			<input type="radio" name="movie" value="5">			
			</td>
			</tr>
	
			<tr>
			<td>
			<img  style="width:100px; height:150px;" src="./image/6.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=109960'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/7.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=17773'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/8.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=113352'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/9.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=94195'" alt="">
			</td>
			<td>
			<img  style="width:100px; height:150px;" src="./image/10.jpg" onclick="location.href='http://movie.naver.com/movie/bi/mi/basic.nhn?code=130983'" alt="">
			</td>
			</tr>
	
			<tr>
			<td>
			<input type="radio" name="movie" value="6">
			</td>
			<td>
			<input type="radio" name="movie" value="7">
			</td>
			<td>
			<input type="radio" name="movie" value="8">
			</td>
			<td>
			<input type="radio" name="movie" value="9">
			</td>
			<td>
			<input type="radio" name="movie" value="10">			
			</td>
			</tr>
			
			</table>



		<table style="width: 450px; height: 400px; margin-left: auto; margin-right: auto;"cellpadding="2" cellspacing="2">
			<tbody>
				<tr align="center">
				<td style="color:#BD5C24; font-size:40px; font-weight:bold;" colspan="3" rowspan="1">영화티켓 비용 계산기
				</td>
				</tr>
		
				<tr>
				<td colspan="1" rowspan="4">
				<img src="./Zootopia.jpg" style="width: 250px; height: 300px;"></img>
				</td>
				<td colspan="2" rowspan="1" style="height:50px; text-align:center;" >
				<p style="font-size:20px; font-weight:bold;">가격표</p>
				</td>
				</tr>
		
				<tr>
				<td  colspan="2" rowspan="1" style="text-align: center; height: 50px;">	
					일반
					10,000원<br>
					청소년
					8,000원
				</td>
				</tr>
		
				<tr>
				<td style="text-align: center; width:10px">일반
				</td>
				<td>
					<table style="border: 3px ; border-style: solid; border-color: #47C83E; margin-left: auto; 
			margin-right: auto;">
					<tr><td>
					<input style="border:0; text-align: center;" min="0" max="99" placeholder="장수" name="num_adult" type="number" size="5px" required autofocus >
					</td></tr>
					</table>
				</td>
				</tr>
		
				
				<tr>
				<td style="text-align: center;">청소년
				</td>
				<td style="text-align: center;">
					<table style="border:  3px ; border-style: solid; border-color: #47C83E; margin-left: auto; 
			margin-right: auto;">
					<tr><td>
					<input style="border:0; text-align: center;" min="0" max="99" placeholder="장수" name="num_child" type="number" size="5px" required>
					</td></tr>
					</table>
				</td>
				</tr>
		
				<tr align="center">
				<td colspan="3" rowspan="1">
				<input name="submit" value="비용계산" type="submit"> &nbsp;&nbsp;
				<input name="cancel" value="취소" type="reset">
				</td>
				</tr>
			</tbody>
	</table>
		</form>

		</div>
      
        
        <div id="footer">		
			<br>Copyright by JoSeonHyung(SHJo@good.com)<br>All Rights Reserved.
        </div>
    </div>
</body>
</html>