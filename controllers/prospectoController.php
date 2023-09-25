<?php
    class ProspectoController{
        public function ProspectoLista(){
            echo 'PROSPECTO LISTA';
            include './prospecto_view/seleccionar.php';
        }
        public function ProspectoCrear(){
            echo 'PROSPECTO CREAR';
        }
        public function ProspectoBuscar(){
            echo 'PROSPECTO BUSCAR';
        }
    }