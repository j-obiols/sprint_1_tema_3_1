<?php
    $titol1 = "TEMA 3 - PHP BÀSICS";
    $titol2 = "NIVELL 1 - EXERCICI 2";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br> <br>";

    $text="Hello, World!";
    echo $text;
    echo "<br> <br>";

    //Passem tot el text a MAJÚSCULES:

    $text = strtoupper($text);
    echo $text;
    echo "<br> <br>";

    //Per obtenir la longitud de la cadena:

    echo strlen($text);
    echo "<br> <br>";

    //Per invertir una cadena
    echo strrev($text);
    echo "<br> <br>";

    $text2 = " Aquest és el curs de PHP.";

    //Per concatenar:
    $text.= $text2;
    echo $text;
    echo "<br> <br>";
?>