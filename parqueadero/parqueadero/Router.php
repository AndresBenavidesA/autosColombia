<?php
    if(isset($_GET['controlador'])&&(isset($_GET["accion"]))){
        $controlador=$_GET["controlador"];
        $accion=$_GET["accion"];
        include_once("Controllers/".ucfirst($controlador)."Controller.php");
        $objControlador=ucfirst($controlador)."Controller";
        $controlador = new $objControlador;
        $controlador->$accion();
        
    }
    

?>