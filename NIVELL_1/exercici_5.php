<?php
    $titol1 = "TEMA 3 : PHP BÀSICS";
    $titol2 = "NIVELL 1 - EXERCICI 5";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br>";

    $apartat1 = "ARRAYS";
    echo $apartat1;
    echo "<br> <br>";

    $array1 = array(3, 4, 5, 6, 7);
    $array2 = array(9, 10, 11);

    print_r($array1);
    echo "<br> <br>";

    print_r($array2);
    echo "<br> <br>";

    $apartat2 = "Afegim un element a l'array 2:";
    echo $apartat2;
    echo "<br>";
    $array2[] = 12;
    print_r($array2);
    echo "<br> <br>";

    $apartat3 = "Barregem els 2 arrays:";
    echo $apartat3;
    echo "<br>";
    $array3 = array_merge($array1, $array2);
    print_r($array3);
    echo "<br> <br>";

    $apartat4 = "Comptem elements del nou array:";
    echo $apartat4;
    echo "<br>";
    echo "té ".(count($array3))." elements.";
?>