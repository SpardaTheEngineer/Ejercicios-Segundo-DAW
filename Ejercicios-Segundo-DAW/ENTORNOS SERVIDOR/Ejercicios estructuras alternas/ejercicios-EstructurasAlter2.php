<?php

//Este ejercicio se realizara cambiando los parametros en la URL

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100px, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comprobar si es par o impar</h1>
    <p>
        <?php

        if (isset($_GET['numero'])) {
    $numero = htmlspecialchars($_GET['numero']);

        if ($numero % 2 == 0) {
       echo $numeroPar = $numero . " es par";

    }else {
       echo $numeroImpar = $numero . " es impar";
    }

}
        ?>
    </p>


</body>
</html>