<?php

    session_start();
    require_once 'usuarios.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $usuario = $_POST['usuario'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';

        if (isset($_POST['recordarme'])) {
           
            setcookie('token_recordar', $usuarios[$usuario]['token'], time() + (86400 * 30), "/" );

        }
        
        if (isset($usuarios[$usuario]) && 
                $contrasena === $usuarios[$usuario]['contrasena']) 
        {
           $_SESSION['usuario'] = $usuario;
            header("Location: privado.php");
            exit;

        }else {

            header("Location: login_incorrecto.php");
            exit;

        }

        

    }

?>
