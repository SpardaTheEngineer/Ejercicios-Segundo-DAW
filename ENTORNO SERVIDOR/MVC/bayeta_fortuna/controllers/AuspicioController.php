<?php

    class AuspicioController{

        public function index() {

        require __DIR__ . '/../views/index.php';

        }

        public function admin() {

            new Database();
            $auspicios = Auspicio::getAll();

            require __DIR__ . '/../views/admin.php';

        }

        public function eliminar() {

            new Database();

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
                
            $auspicios = new Auspicio($_POST['id'], '', '');

            $auspicios->delete();
            
            }

            header('Location: /../../views/admin.php');
            exit();

        }

    }


?>