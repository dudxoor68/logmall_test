<!doctype html>
 <html>
 <head>
	<title>loginPage</title>
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="./css/proStyle.css">

   <script>
   function check_input()
   {
	echo: "location.href = 'cart_insert.php'";

      document.cart_insert.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  document.member_form.phone.value = "";
	  document.member_form.address.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
 </head>
 <body>
	
	<header>
		<div>
			<div class="logo">
                <a href="./main.php">
				    <img src="./img/logo.png" alt="logo">
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
			
			<div class="search">
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

            <div class="pro">
                <div class="cate">
                    <p style="font-size:14px; color:#888888; ">베스트모음-20만원대 best</p>
                    <hr style="border:solid 1px #c0c0c0; width:700px; "></hr>
                </div>
                <img src="./img/pro1.jpg" class="proImg">
                <div class="proName">
                    <p class="proa">핵스 HIVE F100G 유광</p>
                    <p class="prob">가격: 200,000원</p>
                    <hr style="border:solid 1px #c0c0c0; width:700px; "></hr>
                    <p>적립금: 2,000</p>
                    <p>원래가격: 320,000</p>
                    <p>판매가격: 200,000</p>
                    <p>원산지: 필란드</p>
                    <label>스탠드</label>&nbsp&nbsp
                        <select>
                            <option value="none">==옵션==</option>
                            <option value="A스탠드">A스탠드 (+9,500원)</option>
                            <option style="color:red;">선택안함</option>
                        </select><br><br>

                    <label>스탠드</label>&nbsp&nbsp
                    <select>
                        <option value="none">==옵션==</option>
                        <option value="ZE-4T+">ZE-4T+ (+119,000원)</option>
                        <option value="JP-10+">JP-10+(노컷픽업) (+110,000원)</option>
                        <option value="비밴드T-35">비밴드T-35 (+110,000원)</option>
                        <option style="color:red;">선택안함</option>
                    </select>
                    <div style="border:1px solid #c0c0c0; width:400px; height:30px; margin:10px;">
                        <p style="position:relative; top:-10px; left:100px;">총결제금액: 200,000원</p>
                    </div>
                    <button class="button1">관심상품</button>
                   

					<form  name="cart_form" method="post" action="cart_insert.php">
						<input name="img" type="hidden" value="./img/pro1.jpg">
						<input name="name" type="hidden" value="핵스 HIVE F100G 유광">
						<input name="amount" type="hidden" value="1">
						<input name="point" type="hidden" value="2000">
						<input name="price" type="hidden" value="200000">
						<input name="delivery" type="hidden" value="0">
						<input type="submit" value="장바구니" class="cb">
					</form>

                    <button class="button3">바로 구매하기</button>
                    
                </div>

            </div>

            <div class="proExplan">
				<p style="font-weight:bold; font-size:30px;">제품 상세설명</p>
                <img src="./img/proExplan1.jpg">
				<img src="./img/proEx1.jpg">
				<img src="./img/proExplan3.jpg">
				<img src="./img/proExplan4.jpg">
            </div>


          
           
                    
          


			
			<div class="menu">
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
		
		</div>

        
	</header>

 
 </body>
 </html>
