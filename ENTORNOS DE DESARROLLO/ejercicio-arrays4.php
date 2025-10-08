<?php

$dolar = 10;

    $arrayUSD = array ("euros" => 0.85 , "librasEsterlinas" => 0.74, "rupia" => 88.7);

echo "$dolar dolares son " . $arrayUSD["euros"] * $dolar . " euros <br>";
echo "$dolar dolares son " . $arrayUSD["librasEsterlinas"] * $dolar . " libras esterlinas <br>";
echo "$dolar dolares son " . $arrayUSD["rupia"] * $dolar . " rupias <br>";


?>