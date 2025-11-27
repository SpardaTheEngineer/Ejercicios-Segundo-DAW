<?php

    require_once 'usuarios.php';
    session_start();
   
      if (isset($_COOKIE['token_recordar'])) {
           
        $token = $_COOKIE['token_recordar'];
        
            foreach($usuarios as $usuario_token) {

                if ($usuario_token['token'] === $token) {
                    
                    $_SESSION['usuario'] = $usuario;
                    header("Location: privado.php");
                    exit;

                }

            }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer-Login1</title>
</head>
<body>
    
    <form action="procesar.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br><br>
        <label for="contrasena">contrasena:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br><br>
        <label for="recordarme">Recordarme</label>
        <input type="checkbox" id="recordarme" name="recordarme">
        <br><br>    
        <input type="submit" value="Iniciar Sesión">
    </form>


</body>
</html>