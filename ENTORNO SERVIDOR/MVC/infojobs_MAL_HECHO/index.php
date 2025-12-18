<?php
  
    require_once __DIR__ . '/app/config/config.php';
    require_once __DIR__ . '/app/model/Database.php';
    require_once __DIR__ . '/app/model/OfertaTrabajo.php';
    require_once __DIR__ . '/app/controllers/OfertaController.php';

    OfertaTrabajo::createTable();

    $action = $_GET['action'] ?? 'index';

    $controller = new OfertaController();

    switch ($action) {

        case 'index':
            $controller->index();
            break;
        
        case 'show':
            $controller->show();
            break;

        case 'create':
            $controller->create();
            break;

        case 'store':
            $controller->store();
            break;

        case 'delete':
            $controller->delete();
            break;    

        default:
            $controller->index();
            break;
            
    }

?>   