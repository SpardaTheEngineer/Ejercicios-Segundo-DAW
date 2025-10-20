<?php

function hexToColorName($hex) {
    $hex = strtoupper($hex);

    $colors = [
        '#000000' => 'Negro',
        '#FFFFFF' => 'Blanco',
        '#FF0000' => 'Rojo',
        '#00FF00' => 'Verde',
        '#0000FF' => 'Azul',
        '#FFFF00' => 'Amarillo',
        '#FFA500' => 'Naranja',
        '#800080' => 'Púrpura',
        '#00FFFF' => 'Cian',
        '#FFC0CB' => 'Rosa',
    ];

    return $colors[$hex] ?? 'Color desconocido';

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Escogido</title>
    <style>

    h1{
        color: <?php echo $_COOKIE["color"]; ?>;
    }

    body { background-color: gray;}

    </style>
</head>

<body>

    <h1>

        <?php

        if (isset($_COOKIE["color"])) {
            
            $colorHex = $_COOKIE["color"];
            $colorNombre = hexToColorName($colorHex);
            echo "Tu color escogido es: " . $colorNombre;

        } else {

            echo "Cookie 'color' no está establecida.";

        }

        ?>

    </h1>

</body>

</html>