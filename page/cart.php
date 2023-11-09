<?php
 $con = mysqli_connect("localhost", "root", "", "cart");  
 $sql = "select * from cart ";
 $result = mysqli_query( $con, $sql);
 			

 function php_func(){
	 $sql2 = "delete * from cart";
	 $res = mysqli_query( $con, $sql2);
 }
	
 mysqli_close($con);

 
?>
<!doctype html>
 <html>
 <head>
	<title>장바구니</title>
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="./css/cartStyle.css">
  
<script>
		function clickMe(){
			
			document.write(res);
	}
</script>
 </head>
 <body>
	
	<header>
		<div>
			<div id="logo">
				<a href="./main.php">
					<img href="#" src="./img/logo.png" alt="logo">
				</a>
			</div>
	
			<div id="top_menu">
				<a href="./login.php">로그인</a>
				<a href="./signUp_1.php">회원가입</a>
				<a href="#">마이페이지</a>
				<a href="#">주문조회</a>
				<a href="cart.php">장바구니</a>
				
			</div>
			<hr align="left" width=100% size=2px color="#a0a0a0">
			
			<div id="search">
				<input type="text" placeholder="상품 검색어 입력" >
 					<a href="#">
						<button><img src="./img/icon1.png" style="cursor:pointer;"></button>
					</a>

			</div>
			
			<div id="popsearch">
				<a>인기검색어:</a>
				<a href="#">입문용기타</a>
				<a href="#">야마하기타</a>
				<a href="#">모노케이스</a>
				<a href="#">기타줄</a>
			</div>
			

<?php $con = mysqli_connect("localhost", "root", "", "cart");  ?>
			<div class="cart"> 
				<p style="font-weight:bold; color:#888888; font-size:30px"> Shopping Cart </p>
				<table width="1300">
					<th width="80px" bgcolor="#c0c0c0" >제품번호</th>
					<th bgcolor="#c0c0c0">사진</th>
					<th bgcolor="#c0c0c0">제품명</th>
					<th bgcolor="#c0c0c0">수량</th>
					<th bgcolor="#c0c0c0">적립</th>
					<th bgcolor="#c0c0c0">가격</th>
					<th bgcolor="#c0c0c0">배송비</th>
					
					<?php
                    $query = "SELECT * FROM cart ";
                    $result = mysqli_query($con,$query);
					$total=0;
                    if(mysqli_num_rows($result) > 0)
                    {
                            while($row = mysqli_fetch_array($result))
                            { $total += $row["price"];
             ?> 
					<tr align="center">
					<td><?php echo $row["num"]?></td>
						<td><img style="width:100px; height:100px;" src=<?php echo $row["img"];?>></td>
						<td style="font-weight:bold;"><?php echo $row["name"];?></td>
						<td><?php echo $row["amount"];?></td>
						<td><?php echo $row["point"];?></td>
						<td><?php echo $row["price"];?></td>
						<td><?php echo $row["delivery"];?></td>
						
					</tr>
					<?php
                        }

                    }
                    ?>
					
				</table>
				<p style="position:relative; left:800px;background-color:#888888;width:150px;color:yellow;">총합: <?php echo $total;?>원</p>
				<div class="bu">
					<button style="cursor:pointer; color:black; font-weight:bold; width:200px; height:50px; margin:10px;">결제하기</button>
					
					<button style="cursor:pointer; color:black; font-weight:bold; width:200px; height:50px; margin:10px;"
					onclick= "clickMe()">전체 취소</button>
					
				</div>
			</div>
<?php mysqli_close($con); ?>
			
				<div id="menu">
			<ul>
				<li><a href="#">전체카테고리</a>
					<ul>
						<li><a href="#">~~~</a></li>
					</ul>
				</li>
				<li><a href="#">베스트모음</a>
					<ul>
						<li><a href="#">10만원대 best</a></li>
						<li><a href="#">20~30만원대 best</a></li>
						<li><a href="#">40~50만원대 best</a></li>
						<li><a href="#">60~70만원대 best</a></li>
						<li><a href="#">80~90만원대 best</a></li>
						<li><a href="#">100만원대 best</a></li>
						<li><a href="#">미니기타 best</a></li>
						<li><a href="#">클래식기타 best</a></li>
					</ul>
				</li>
				<li><a href="#">브랜드별 모음</a>
					<ul>
						<li><a href="#">헥스</a></li>
						<li><a href="#">야마하기타</a></li>
						<li><a href="#">고퍼우드</a></li>
						<li><a href="#">와일드우드</a></li>
						<li><a href="#">비일라</a></li>
						<li><a href="#">크래프터</a></li>
					</ul>
				</li>
				<li><a href="#">클래식 기타</a>
					<ul>
						<li><a href="#">클래식 기타</a></li>
					</ul>
				</li>
				<li><a href="#">연주악세서리</a>
					<ul>
						<li><a href="#">스트링</a></li>
						<li><a href="#">카포|슬라이딩</a></li>
						<li><a href="#">튜너|메트로놈</a></li>
						<li><a href="#">피크|피크홀더</a></li>
						<li><a href="#">케이블</a></li>
						<li><a href="#">변환젠더|커넥터</a></li>
						<li><a href="#">스트랩|스트랩락</a></li>
						<li><a href="#">픽업 및 픽업부품</a></li>
						<li><a href="#">엠프</a></li>
						<li><a href="#">마이크</a></li>
					</ul>
				</li>
				<li><a href="#">관리악세서리</a>
					<ul>
						<li><a href="#">청소용품</a></li>
						<li><a href="#">습도관리용품</a></li>
						<li><a href="#">픽가드|홀가드</a></li>
						<li><a href="#">공구|유지관리</a></li>
						<li><a href="#">부품</a></li>
						<li><a href="#">데코용품</a></li>
						<li><a href="#">케이스</a></li>
						<li><a href="#">기타스탠드|발판</a></li>
						<li><a href="#">마이크스탠드</a></li>
						<li><a href="#">보면대</a></li>
					</ul>
				</li>
				<li><a href="#">Ect악기</a>
					<ul>
						<li><a href="#">우쿨렐레</a></li>
						<li><a href="#">카주</a></li>
						<li><a href="#">하모니카</a></li>
					</ul>
				</li>
				<li><a href="#">상설할인품</a>
					<ul>
						<li><a href="#">이월상품</a></li>
						<li><a href="#">하자상품</a></li>
						<li><a href="#">중고상품</a></li>
					</ul>
				</li>
				<li><a href="#">Q&A</a>
					
				</li>
				<li><a href="#">A/S</a>
					
				</li>
				<li><a href="#">커뮤니티</a>
					<ul>
						<li><a href="#">공지사항</a></li>
						<li><a href="#">이벤트</a></li>
						<li><a href="#">자주 묻는 질문</a></li>
					</ul>
				</li>
				
			</ul>
			
			</div>
			
			
			




 				<div>
 					<div class="coIn">
						<p style="font-weight:bold; font-size:20px;">기타몰</p>
						<p>주소: 서울특별시 송파구 한가람로 65</p>
						<p>대표: 이인제</p>
						<p>전화번호 : 010-1234-1234</p>
						<p>사업자 번호: 123-12-1234</p>
					</div>
				 	
				</div>
			







		</div>
	</header>

 
 </body>
 </html>
