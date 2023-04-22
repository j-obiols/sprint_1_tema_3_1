<?php

    declare(strict_types=1);

    echo "TEMA 3 : PHP BÀSICS <br>";
    echo  "NIVELL 3 - EXERCICI 1 <br> <br>";
        

    $string1 = "Hello World";
    $string2 = "Bon dia, Barcelona!";

    
    function stringArray(string $str1): array {

        $arAux1 = explode(" ", $str1);
        $resultat = array();

        foreach($arAux1 as $arComp) {
            $arAux2 = str_split($arComp);
            $resultat = array_merge($resultat, $arAux2);
        }

        return $resultat;
    }

    echo $string1."<br>";
    var_dump (stringArray($string1));

    echo "<br>";
    echo "<br>";

    echo $string2."<br>";
    var_dump (stringArray($string2));

?>