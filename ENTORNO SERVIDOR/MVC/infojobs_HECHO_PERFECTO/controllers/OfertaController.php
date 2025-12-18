<?php


class OfertaController
{

    public function index()
    {

        $ofertas = OfertaTrabajo::getAll();
        require __DIR__ . '/../views/index.php';

    }

    public function verOferta()
    {

        $id = $_GET['id'] ?? null;
            
        $oferta = OfertaTrabajo::getById($id);
        require __DIR__ . '/../views/verOferta.php';

    }

    public function createoferta()
    {

        require __DIR__ . '/../views/crearOferta.php';

    }

    public function procesarOferta()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $descripcion = $_POST['descripcion'];
            $salario = $_POST['salario'];
            $empresa = $_POST['empresa'];
            $ubicacion = $_POST['ubicacion'];

            $oferta = new OfertaTrabajo(null, $descripcion, $salario, $empresa, $ubicacion);
            $oferta->save();

            header('Location: index.php?action=index');
            exit();
        }
    }

    public function eliminarOferta()
    {

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/OfertaTrabajo.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if ($id) {
                OfertaTrabajo::delete($id);
            }
        }

        header('Location: index.php?action=index');
        exit;
    }



}
