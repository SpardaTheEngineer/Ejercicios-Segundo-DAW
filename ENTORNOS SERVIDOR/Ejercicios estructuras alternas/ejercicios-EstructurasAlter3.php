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
    <h1>Comprobar nota</h1>
    <p>
        <?php

        if (isset($_GET['numero'])) {
    $numero = htmlspecialchars($_GET['numero']);

      switch ($numero) {
    
    //INSUFICIENTES

        case '0':
        case '1':
        case '2':
        case '3':
        case '4':
        echo "Insuficiente";
            break;

    //SUFICIENTE

        case '5':
        echo "Suficiente";
            break;

    //BIEN

        case '6':
        echo "Bien";
            break;

    //Notable

        case '7':
        case '8':
        echo "Notable";
            break;    

    //Sobresaliente

        case '9':
        case '10':
        echo "Sobresaliente";
            break;

    //Otros numeros

        default:
        echo  "Porfavor intriduzca un numero del 1 al 10";
            break;
      }

}
        ?>
    </p>


</body>
</html>