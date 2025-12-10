<?php

    require_once __DIR__ . '/controller/EntradaController.php';
    $controller = new EntradaController();

    $action = $_GET['action'] ?? 'mostrarEntradas';

    switch($action) {
        case 'crearEntrada':
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $titulo = $_POST['titulo'];
                $contenido = $_POST['contenido'];

                $entrada = $controller->guardarEntrada($titulo, $contenido);
                header("Location: index.php?action=mostrarEntradas");
                exit();
            }
            break;
        case 'crearEntradas':
            $controller->crearEntradas();
            break;
        case 'mostrarEntrada':
            $id = $_GET['id'];
            $controller->mostrarEntrada($id);
            break;
        case 'mostrarEntradas':
        default:
            $controller->mostrarEntradas();
            break;
    }


?>