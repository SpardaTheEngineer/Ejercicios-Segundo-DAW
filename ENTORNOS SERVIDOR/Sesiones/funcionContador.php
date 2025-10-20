<?php

 session_start();

    $_SESSION['contador'];

    if (isset($_SESSION['contador'])){

        $_SESSION['contador']++;

    } else {

       $_SESSION['contador'] = 0;

    }
      
    echo $_SESSION["contador"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100px, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contador.php">

        <label>Volver</label>
        <input type="submit" name="pulsame"></input>


    </form>
</body>
</html>