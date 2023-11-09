
<!doctype html>
 <html>
 <head>
	<title>상품 등록</title>
   <meta charset="utf-8">
   
   <link rel="stylesheet" href="./css/proadd.css">
    <script>
        function check_input()
   {
      if (!document.proadd.proname.value) {
          alert("상품 이름를 입력하세요!");    
          document.proadd.proname.focus();
          return;
      }

      if (!document.proadd.val.value) {
          alert("세부 카테고리를 입력하세요!");    
          document.proadd.val.focus();
          return;
      }

      if (!document.proadd.category2.value) {
          alert("세부 카테고리를 입력하세요!");    
          document.proadd.category2.focus();
          return;
      }

      if (!document.proadd.proprice.value) {
          alert("원래가격을 입력하세요!");    
          document.proadd.proprice.focus();
          return;
      }

      if (!document.proadd.prosale.value) {
          alert("할인가격을 입력하세요!");    
          document.proadd.prosale.focus();
          return;
      }

      if (!document.proadd.proorigin.value) {
          alert("원산지를 입력하세요!");    
          document.proadd.proorigin.focus();
          return;
      }

      if (!document.proadd.proimg.value) {
          alert("사진을 등록하세요!");    
          document.proadd.proimg.focus();
          return;
      }

      if (!document.proadd.category1.value) {
          alert("카테고리를 입력하세요!");    
          document.proadd.category1.focus();
          return;
      }


      document.proadd.submit();
   }
   
   
    </script>
 </head>
 <body>
	
	<header>
    <div>
    <form name="proadd" method="post" action="product_insert.php">
		<div class="posi">
            <div id="file_select">
                <p>상품 이미지 선택</p>
                <input type="file" name="proimg"> 
            </div>

            <div>
                <p>상품 이름</p>
                <input type="text" name="proname">
            </div>

            <div id="category">
                <p>카테고리 (베스트모음,브랜드별 기타,클래식 기타,연주악세서시,관리악세서리,ETC악기)</p>
                <input type="text" name="category1">
            </div>

            <div id="category2">
                <p>세부 카테고리</p>
                <input type="text" name="category2">
            </div>

            <div id="price">
                <p>원래가격</p>
                <input type="text" name="proprice">
            </div>

            <div id="sale">
                <p>할인가격</p>
                <input type="text" name="prosale">
            </div>

            <div id="orgin">
                <p>원산지</p>
                <input type="text" name="proorigin"> 
            </div><br>
            <div>
                <input type="submit" value="확인" onclick="check_input()">
                <input type="submit" value="취소" onclick="window.close()">
            </div>
        </div>
    </form>
</div>
	</header>

 
 </body>
 </html>
