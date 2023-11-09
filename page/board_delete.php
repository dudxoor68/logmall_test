
 <?php
     $num = $_REQUEST["num"];
     $con = mysqli_connect("localhost", "root", "", "board");
                 $sql = "delete from board where num=$num";
            
                      mysqli_query($con, $sql);
                     mysqli_close($con); 

     header("Location:board_list.php");
     exit();
 ?>
