<?php

    declare(strict_types=1);

    echo "TEMA 3 : PHP BÀSICS <br>";
    echo  "NIVELL 3 - EXERCICI 2 <br> <br>";
    
    $ar1 = [5, 6, 3, 5, 7, 8, 8, 2, 9, 10, 4, 8, 6, 7];
    $value1 = 8;

    $ar2 = ["a", "f", "d", "a", "b", "a", "d", "d", "b", "a", "b", "a"];
    $value2 = "a";
     

    function contarCasos(array $ar, $value): int {

        $contador = count(array_keys($ar, $value)); 

        return $contador;
    } 

    
    /*Primer l'havia programat així, també funcionava:

        function contarCasos(array $ar, $value): int {

            $contador = 0;

            foreach ($ar as $arValue) {
                if($arValue == $value) {
                    $contador++;
                }
            }

            return $contador;
        }
        
    */

    print_r($ar1);
    echo "<br> <br>";
    echo "El valor '8' apareix ".contarCasos($ar1, $value1)." vegades en aquest grup de dades. <br>";
    
    echo "<br> <br>";
    
    print_r ($ar2);
    echo "<br> <br>";
    echo "El valor 'a' apareix ".contarCasos($ar2, $value2)." vegades en aquest grup de dades. <br>";
    

?>