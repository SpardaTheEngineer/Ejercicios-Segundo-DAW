<?php

    require_once __DIR__ . '/models/Database.php';
    require_once __DIR__ . '/models/Ganga.php';
    require_once __DIR__ . '/models/User.php';
    require_once __DIR__ . '/controllers/GangaController.php';

    $action = $_GET['action'] ?? 'login';

    $controller = new GangaController();

    switch ($action) {

        case 'login':
            $controller->login();
            break;
        
        case 'register':
            $controller->register();
            break;    

        case 'listarGangas':
            $controller->listarGangas();
            break;    

        case 'like':
            $controller->like();
            break;
        
        case 'filtrar':
            $controller->filtrar();
            break;    

        default:
            $controller->login();
            break;
    
    }






?>