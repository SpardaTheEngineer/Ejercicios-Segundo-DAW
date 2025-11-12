<?php 
	// index.php
    require_once "Entrada.php";

    $entrada01 = Entrada::find("entrada01.json");
    $entrada02 = Entrada::find("entrada02.json");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>

    <h1><?= $entrada01->titulo ?></h1>
   <a href="entrada2.php?id=entrada01.json">Leer entrada</a>     
    <h1><?= $entrada02->titulo ?></h1>
   <a href="entrada2.php?id=entrada02.json">Leer entrada</a>     

</body>
</html>