<?php
    
    $titol1 = "TEMA 3 - PHP BÀSICS";
    $titol2 = "NIVELL 1 - EXERCICI 4";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br> <br>";

    //Definim variables enters
    $x = 9;
    $y = 5;

    //Definim variables decimals
    $m = 3.5;
    $n = 1.5;

    /*Per a x i y
    * Valor de cada variable
    * Suma, resta, producte i mòdul*/

    echo "x = $x";
    echo "<br>";
    echo "y = $y";
    echo "<br>";
    echo "x + y = ".$x + $y;
    echo "<br>";
    echo "x - y = ".$x - $y;
    echo "<br>";
    echo "x * y = ".$x * $y;
    echo "<br>";
    echo "El mòdul és ".$x % $y, ".";
    echo "<br> <br>";
    //Per a m i n, el mateix
    echo "m = $m";
    echo "<br>";
    echo "n = $n";
    echo "<br>";
    echo "m + n = ".$m + $n;
    echo "<br>"; 
    echo "m - n = ".$m - $n;
    echo "<br>"; 
    echo "m * n = ".$m * $n;
    echo "<br>";
    echo "El mòdul és ".$m % $n.".";
    echo "<br> <br>"; 

    //Per l'apartat següent farem un array associatiu de números.

    //Doble de tots els nombres:

    $numeros = array( "x" => 9 , "y" => 5 , "m" => 3.5 , "n" => 1.5);

    foreach ($numeros as $n => $nvalue) {
        $nvalue = $nvalue * 2 ; 
        echo  "2".$n." = ".$nvalue;
        echo "<br>";   
    }

    //Suma de tots els nombres:

    echo "<br>";
    echo "La suma de tots els nombres és ".array_sum($numeros).".";
    echo "<br>";

    //Producte de tots els nombres
    echo "<br>";
    echo "El producte de tots els nombres és ".array_product($numeros).".";
    echo "<br>";
?>