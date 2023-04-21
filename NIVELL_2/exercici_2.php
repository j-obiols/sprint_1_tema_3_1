<?php

    declare(strict_types=1);

    echo "TEMA 3 : PHP BÀSICS <br>";
    echo  "NIVELL 2 - EXERCICI 2";
    echo "<br> <br>";

    //Definim la funció demanada:

    function intercanvi(string $str): string {
        $ar = str_split($str);
        $n = count($ar);
        $newAr = array_merge(array($ar[$n-1]), array_slice($ar, 1, $n-2),array($ar[0]));
        $result = implode($newAr);
        return $result;
    }

    //Tres exemples:

    $string1 = "girona";
    echo $string1."<br>";
    echo intercanvi($string1)."<br>";
    echo "<br>";

    $string2 = "london";
    echo $string2."<br>";
    echo intercanvi($string2)."<br>";
    echo "<br>";

    $string3 = "new york";
    echo $string3."<br>";
    echo intercanvi($string3)."<br>";

?>