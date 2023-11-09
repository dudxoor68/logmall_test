<!doctype html>
 <html>
 <head>
	<title>loginPage</title>
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="./css/loginStyle.css">
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


            <div id="container" class="main_container">
                 <div style="padding: 20px;"></div>
                 <div class="login_container">
                     <div class="form_container">
                             <form name="login_form" action="/cookie" method="get">
                     <div class="form_title_div">
                         <p class="form_title_p">LOGIN</p>
                    </div>
                    <div>
                        <div>
                            <a class="form_item_name">아이디</a>
                        </div>
                        <div>
                            <input type="text" name="userId" placeholder="userId" class="form_input"/>
                        </div>
                        <div class="form_text_alert_padding">
                            <div id="alert_userId" class="form_text_alert"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a class="form_item_name">비밀번호</a>
                        </div>
                        <div>
                            <input type="text" name="userPassword" placeholder="userPassword" class="form_input"/>
                        </div>
                        <div class="form_text_alert_padding">
                            <div id="alert_userPassword" class="form_text_alert"></div>
                        </div>
                    </div>
                    <div style="height: 10px;"></div>
                    <div>
                        <button type="button" class="form_submit_button" style="cursor:pointer;">로그인</button>
                    </div>
                    <div>
						<a href="./signUp_1.php">
                        	<button type="button" class="signUp" style="cursor:pointer;">회원가입</button>
						</a>
                    </div>
                    <div>
						<a href="./find.php">
                        <button type="button" class="findIdPw" style="cursor:pointer;">아이디/비밀번호 찾기</button>
						</a>
                    </div>
                             </form>
                      </div>
                 </div>
             </div>
                    
            <div class="easyLogin">
                <div>
                    <a class="easy_a">간편로그인<a>
                </div>
                <a href="https://accounts.kakao.com/login?continue=https%3A%2F%2Fkauth.kakao.com%2Foauth%2Fauthorize%3Fproxy%3DeasyXDM_Kakao_f8ye1z1yvbu_provider%26ka%3Dsdk%252F1.43.0%2520os%252Fjavascript%2520sdk_type%252Fjavascript%2520lang%252Fko-KR%2520device%252FWin32%2520origin%252Fhttps%25253A%25252F%25252Fwww.epis.or.kr%26origin%3Dhttps%253A%252F%252Fwww.epis.or.kr%26response_type%3Dcode%26redirect_uri%3Dkakaojs%26state%3D2ad41byomx8bu0erfgp02w%26through_account%3Dtrue%26client_id%3D950f3ae1f2f550e5ba7ff7d9fffc7781&talk_login=hidden">
                    <img src="./img/loginKakao.gif" alt="kakaologin" class="loginKakao">
                </a>
                <a href="https://nid.naver.com/nidlogin.login?mode=form&url=https%3A%2F%2Fwww.naver.com">
                    <img src="./img/loginNaver.png" alt="naverlogin" class="loginNaver">
                </a>
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
