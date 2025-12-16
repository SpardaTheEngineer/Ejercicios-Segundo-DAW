<?php 

    class OfertaController{

        /*Te lleva al inicio y te muestra todas 
        las ofertas (metodo GetAll),si estuviesemos
        en laravelk ya trae implementado el metodo all,
        no haria falta crearlo.*/
        public function index() {
            $ofertas = OfertaTrabajo::getAll();
            require __DIR__ . '/../views/ofertas/index.php';
        }

        //Te muestra la oferta que le pases por paramtro id
        public function show() {

            $id = $_GET['id'] ?? null;
           
            
            $oferta = OfertaTrabajo::getById($id);
            require __DIR__ . '/../views/ofertas/show.php';
            
        }

        //Te trae crear oferta
        public function create() {

            require __DIR__ . '/../views/ofertas/create.php';

        }

        //Te almacena una nueva oferta si vienes por un post
        //si no, te manda a crearla.
        public function store() {

            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header('Location: index.php?action=create');
                exit;
            }    

            $descripcion = $_POST['descripcion'];
            $salario = $_POST['salario'];
            $empresa = $_POST['empresa'];
            $ubicacion = $_POST['ubicacion'];

            $oferta = new OfertaTrabajo(null, $descripcion, $salario, $empresa, $ubicacion);
            $oferta->save();

            header('Location: index.php?action=index');
            exit();

        }

        //Si te ha venido por un post, Y EXISTE, cargatela.
        public function delete() {

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
    





?>