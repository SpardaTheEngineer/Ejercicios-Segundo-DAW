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
    <h1>Proverbio Chino diario:</h1>
    <p>
        <?php

        if (isset($_GET['dia'])) {
    $dia = htmlspecialchars($_GET['dia']);

      switch (date($dia)) {
    
//DIAS SEMANA Y FRASE
        case '1':
            echo 'Lunes: Caido el arbol, los monos se dispersan';
            break;
        case '2':
            echo 'Martes: Aguila herido, confunde charco con el cielo';
            break;
        case '3':
            echo 'Miercoles: Quien busca la venganza, debe cavar dos tumbas';
            break;
        case '4':
            echo "Jueves: Dragon atado de pies y manos, presa de cangrejo ";
            break;
        case "5":
            echo "Viernes: El agua hace flotar al barco, pero tambien lo hunde";
            break;
        case '6':
            echo "Sabado: Tigre durmiendo, mas peligroso que 100 pollos despiertos";
            break;
        case '7':
            echo 'Domingo: Cuando el sabio apunta a la luna, el necio solo ve el dedo ';
            break;
        default:
        echo  "Porfavor introduzca un numero del 1 al 7 joven shaolin";
            break;
      }

}
        ?>
    </p>


</body>
</html>