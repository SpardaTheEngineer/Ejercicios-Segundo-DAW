<?php

    require_once __DIR__ . '/models/Database.php';
    require_once __DIR__ . '/models/OfertaTrabajo.php';
    require_once __DIR__ . '/config/config.php';
    require_once __DIR__ . '/controllers/OfertaController.php';

    OfertaTrabajo::createTable();
    
    $action = $_GET['action'] ?? 'index';

    $controller = new OfertaController();

    switch ($action) {

        case 'index':
            $controller->index();
            break;

        case 'verOferta':
            $controller->verOferta();
            break;        
        
        case 'createOferta':
            $controller->createOferta();
            break; 

        case 'procesarOferta':
            $controller->procesarOferta();
            break;    

        
        case 'eliminarOferta':
            $controller->eliminarOferta();
            break;    

        default:
            $controller->index();
            break;
    }


?>