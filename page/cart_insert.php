<?php
    $img   = $_POST["img"];
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $point  = $_POST["point"];
    $price  = $_POST["price"];
    $delivery = $_POST["delivery"];
    

              
    $con = mysqli_connect("localhost", "root", "", "cart");

	$sql = "insert into cart(userid, img, name, amount, point, price, delivery) ";
	$sql .= "values('1', '$img', '$name', '$amount', '$point','$price','$delivery')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'cart.php';
	      </script>
	  ";
?>

   
