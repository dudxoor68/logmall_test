<!doctype html>
 <html>
 <head>
	<title>회원가입 종류 선택</title>
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="./css/sign2Style.css">
   <script>
   function check_input()
   {
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

	  if (!document.member_form.phone.value) {
          alert("핸드폰 번호를 입력하세요!");    
          document.member_form.phone.focus();
          return;
      }

	  if (!document.member_form.address.value) {
          alert("주소를 입력하세요!");    
          document.member_form.address.focus();
          return;
      }

      document.member_form.submit();
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
         
			<div class="cc">
                <p style="font-weight: bold;">회원가입</p>
                <hr style="border:solid 1px grey; width:700px;"></hr>

            </div>

			
          
			
			 <div id="main_content">
      			<div id="join_box">
          			<form  name="member_form" method="post" action="member_insert.php">
    		    		<div class="form id">
				   	        <div class="col1">아이디</div>
				    		<div class="col2">
								<input type="text" name="id">
				        	</div>  
				        	<div class="col3">
				        		<a href="#"><img src="./img/check_id.gif" onclick="check_id()"></a>
				        	</div>                 
			       		</div>
			       		<div class="clear"></div>

			       			<div class="form">
				        	<div class="col1">비밀번호</div>
				        		<div class="col2">
									<input type="password" name="pass">
				        		</div>                 
			       			</div>
			       			<div class="clear"></div>

			       			<div class="form">
				        		<div class="col1">비밀번호 확인</div>
				        		<div class="col2">
									<input type="password" name="pass_confirm">
				        	</div>                 
			       		</div>
			       		<div class="clear"></div>

			      		<div class="form">
				       		 <div class="col1">이름</div>
				     	     <div class="col2">
								<input type="text" name="name">
				      		 </div>                 
			       		</div>
			       		<div class="clear"></div>

			      	 	<div class="form email">
				      		 <div class="col1">이메일</div>
				        	 <div class="col2">
								 <input type="text" name="email1">@<input type="text" name="email2">
				      		 </div>                 
			       	     </div>
							<div class="clear"></div>

			             		<div class="phoneNumber">
				        		<div class="col1">전화번호<br>(-제외)</div>
				        			<div class="col2">
										<input type="text" name="phone"><br><br><br>
				       			 </div>                 
			       			</div>    
							   <div class="clear"></div>

			       			<div class="form">
				        		<div class="col1">주소</div>
				        		<div class="col2">
									<input type="text" name="address">
				        		</div>                 
			       			</div>
			      	     <div class="clear"></div><br><br><br>

			       		 <div class="buttons">
	                		 <img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input() ">&nbsp;
                  			 <img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  				onclick="reset_form()">
	           			</div>
						   <div class="bottom_line"> </div>
					 </form>
        		 </div> <!-- join_box -->
      	     </div> <!-- main_content -->





			
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
