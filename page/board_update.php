 <?php
     $num     = $_REQUEST["num"    ];
     
     $title   = $_REQUEST["title"  ];
     $writer  = $_REQUEST["writer" ];
     $content = $_REQUEST["content"];
     
     if ($title && $writer && $content) {
         $regtime = date("Y-m-d H:i:s");
                 $con = mysqli_connect("localhost", "root", "", "board");
                 $sql = "update board set writer='$writer', title='$title', content='$content',  regtime='$regtime' where num=$num";
            
                      mysqli_query($con, $sql);
                     mysqli_close($con); 
         header("Location:board_view.php?num=$num");
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
