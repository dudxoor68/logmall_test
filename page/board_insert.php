<?php
     $title   = $_REQUEST["title"  ];
     $writer  = $_REQUEST["writer" ];
     $content = $_REQUEST["content"];
     
     if ($title && $writer && $content) {
         $regtime = date("Y-m-d H:i:s");
         
         $con = mysqli_connect("localhost", "root", "", "board");
        $sql = "insert into board (writer, title, content, regtime, hits) values ('$writer', '$title', '$content', '$regtime', 0)";

             mysqli_query($con, $sql);
             mysqli_close($con); 
         header("Location:board_list.php");
         
         exit();
     }        
 ?>
  
 <!doctype html>
 <html>
 <head>
     <meta charset="utf-8">
 </head>
 <body>
 
 <script>
     alert('모든 항목이 빈칸 없이 입력되어야 합니다.');
    history.back();
 </script>
 
 </body>
 </html>