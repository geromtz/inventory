<?php
    require_once("model/index.php");
    class modeloController{
        private $model;
        function __construct() {
            $this->model = new Modelo();
        }

        //mostrar
        static function index() {
            $producto    = new Modelo();
            $dato       = $producto->mostrar("productos", "1");
            require_once("view/index.php");
        }
        //nuevo
        static function nuevo() {
            require_once("view/nuevo.php");
        }
        //guardar
        static function guardar() {
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];
            $data = "'".$nombre."'".$precio;
            $producto = new Modelo();
            $dato = $producto->insertar("productos",$data);
            header("location".urlsite);
        }
    }
?>