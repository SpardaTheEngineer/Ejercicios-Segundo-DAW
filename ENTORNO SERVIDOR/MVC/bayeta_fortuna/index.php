<?php

    require_once __DIR__ . '/controllers/AuspicioController.php';
    require_once __DIR__ . '/models/Auspicio.php';
    require_once __DIR__ . '/models/Database.php';

    $action = $_GET['action'] ?? 'index';

    $controller = new AuspicioController();

    switch ($action) {

        case 'index':
            $controller->index();
            break;
        
        case 'admin':
            $controller->admin();
            break;

        case 'eliminar':
            $controller->eliminar();
            break;    

        default:
            $controller->index();
            break;
    }



?>

