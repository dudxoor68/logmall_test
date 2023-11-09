<?php
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];

    $con = mysqli_connect("localhost", "root", "", "users");

 
    
    $query = "SELECT * FROM members where id = '$id' and email = '$email' and name = '$name';";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0)
                    { while($row = mysqli_fetch_array($result)){
    echo "PASSWORD:".$row["pass"];
                    }}

    mysqli_close($con);  
?>
   <input type="button" value="뒤로가기" onclick="history.back()">