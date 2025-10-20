<?php

    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<h1>Bienvenido: </h1>

<h2><?php echo $_SESSION["username"]; ?> </h2>

<form action="logout.php" method="post">

<button class="cerrar-sesion" type="submit" name="cerrar-sesion">Cerrar sesion</button>  

</form>
</body>
</html>