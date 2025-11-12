<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {

        header("Location: login.php"); 
        exit;

    }
    
    $usuario = $_SESSION['usuario'];

    $color_fondo = $_COOKIE["color_fondo_$usuario"] ?? 'white';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $color = $_POST['seleccionar-color'];

        if (isset($color)) {
            
            setcookie("color_fondo_$usuario", $color, time() + (86400 * 30), "/");
            header("Location: privado.php");
            exit;

        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso concedido</title>
    <style>

        body { 

            background-color: <?php echo $color_fondo ?> ;

        }

    </style>
</head>
<body>

    <h1>Bienvenido <?php echo htmlspecialchars($usuario) ?>:</h1>
    <br>
    <h2>Escoge tu color favorito</h1>

    <form action="" method="post">

    <label for="seleccionar-color">Elige un color:</label>
    <input type="color" id="seleccionar-color" name="seleccionar-color" value="#000000">
    <button type="submit">Enviar</button>

    </form>
    <br><br>

    <a href="logout.php">Cerrar sesion</a>

</body>
</html>