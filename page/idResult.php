<?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];

    $con = mysqli_connect("localhost", "root", "", "users");

    $sql = "select * from members where name = '$name' and email = '$email' and phone = '$phone';";
	mysqli_query($con, $sql); 
    
    $query = "SELECT * FROM members where name = '$name' and email = '$email' and phone = '$phone';";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0)
                    { while($row = mysqli_fetch_array($result)){
    echo "ID:".$row["id"];
                    }}

    mysqli_close($con);  
?>
   <input type="button" value="뒤로가기" onclick="history.back()">