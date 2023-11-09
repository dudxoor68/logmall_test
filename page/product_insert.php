<?php
    $name=$_POST["proname"];
    $category1=$_POST["category1"];
    $category2=$_POST["category2"];
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
    $price=$_POST["proprice"];
    $sale=$_POST["prosale"];
    $origin=$_POST["proorigin"];
    $img='./img/'.$_POST["proimg"];


    $con = mysqli_connect("localhost", "root", "", "product");

    $sql = "insert into product(name,category1,category2,regist_day,price,sale,origin,img) ";
	$sql .= "values('$name','$category1','$category2','$regist_day','$price','$sale','$origin','$img')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);    

    echo "
	      <script>
	          location.href = 'prosuccess.php';
	      </script>
	  ";
?>