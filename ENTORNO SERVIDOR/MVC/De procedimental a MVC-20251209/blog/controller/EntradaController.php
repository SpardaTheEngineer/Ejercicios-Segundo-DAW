<?php

    require_once __DIR__ . "/../model/Entrada.php";

    class EntradaController {
        
        public function getEntrada($fichero) {
            return Entrada::find($fichero);
        }

        public function getAllEntradas() {
            $ficheros_entradas = glob('data/*.json');
            $entradas = [];
            foreach ($ficheros_entradas as $fichero) {
                $entradas[$fichero] = Entrada::find($fichero);
            }
            return $entradas;
        }

        public function guardarEntrada($titulo, $contenido) {
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }

        public function mostrarEntradas() {
            $entradas = $this->getAllEntradas();
            require __DIR__ . '/../view/listado.php';
        }

        public function mostrarEntrada($id) {
            $entrada = $this->getEntrada($id);
            require __DIR__ . '/../view/entrada.php';
        }

        public function crearEntradas() {
            require __DIR__ . '/../view/crear-entrada.php';
        }

    }

?>