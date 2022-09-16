    <meta charset="utf-8">
</head>
<body bgcolor="CCDBCC">
    <?php
    $x = 0;
    $y = 0;
    
    for ($x = 1; $x <= 10; $x++)
   { 
    echo "<br>";
        for ($y = 1; $y <= 10; $y++) {
        
            echo $y  ."*" .$x ."=" .$y * $x . "<br>";
        

        }
   }
?>
<?php
   
   $wysokosc = 5;
   $szerokosc = 6;
   for($i = 0; $i < $wysokosc; $i++) {

       for($j = 0; $j < $wysokosc; $j++) {
           
           if($i === 0 || $i === $wysokosc - 1) {
               echo "*";
           }
           else {

               if($j === 0 || $j === $wysokosc - 1) {
                   echo "*";
               }
               else {
                   
                   echo "&nbsp;&nbsp;";
               }
           }
       }
       echo "<br>";
   }
?>


</body>
</html>

