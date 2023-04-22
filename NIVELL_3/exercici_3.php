<?php

    declare(strict_types=1);

    echo "TEMA 3 : PHP BÀSICS <br>";
    echo  "NIVELL 3 - EXERCICI 3 <br> <br>";

    //Eliminar un element d'un array i normalitzar claus:

    $X = [10, 20, 30, 40, 50];
    $value1 = 40;

    $Y = ["1980", "1982", "1985", "1990", "1980", "1981", "1995", "1983", "1985"];
    $value2 = "1980";

    function eliminarElement(array $ar, $value): array {
      
        // La funció array_keys retorna un array amb les claus d'un determinat valor en un array:

        foreach(array_keys($ar, $value) as $key) {

            //Eliminem els valors coincidents, coneixent les claus:

            unset($ar[$key]);
            
        }

        //Per tornar a organitzar les claus utilitzem array_values:

        return array_values($ar);
    } 

   print_r($X);
   echo "<br>";
   print_r (eliminarElement($X, $value1));

   echo "<br>";
   echo "<br>";

   print_r($Y);
   echo "<br>";
   print_r (eliminarElement($Y, $value2));
   echo "<br>";

?>