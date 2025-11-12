<?php
    // Destruir sesión y eliminar cookie
    ### Completar código aquí ###
    session_start();

    session_unset();

    session_destroy();

    setcookie("token_recordarme", '', time() - (8600 * 30));

    header('Location: login.php');
    exit();
?>