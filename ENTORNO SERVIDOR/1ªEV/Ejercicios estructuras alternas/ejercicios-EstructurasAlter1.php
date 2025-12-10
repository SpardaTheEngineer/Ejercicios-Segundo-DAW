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
    <h1>Comprobar si es mayor o menor de edad</h1>
    <p>
        <?php

        if (isset($_GET['edad'])) {
    $edad = htmlspecialchars($_GET['edad']);

        if ($edad >= 18 && $edad < 65) {
       echo $mayorEdad = "Es mayor de edad";

    }else if ($edad >= 65) {
       echo $jubilado = "Es jubilado";

    }else {
       echo $menorEdad = "Es menor de edad";
    }

}
        ?>
    </p>


</body>
</html>