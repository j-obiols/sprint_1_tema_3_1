<?php 

    declare(strict_types=1);

    echo "TEMA 3 : PHP BÀSICS <br>";
    echo  "NIVELL 2 - EXERCICI 1 <br> <br>";
    

    function suma(int $a, int $b): int {
       if($a == $b) {
           return 2*($a + $b);
       } else {
           return $a + $b;
       }
    }
   
    echo suma(2,-5)."<br> <br>";
    echo suma(-5, 25)."<br> <br>";
    echo suma(3, 49)."<br> <br>";
    echo suma(10, 10)."<br> <br>";
    echo suma(-6, -6)."<br> <br>";
    
?>