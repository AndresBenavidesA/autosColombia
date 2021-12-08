<?php
    class PaginasController{
        public function inicio(){
            include_once("Views/paginas/inicio.php");
        }

        public function correct($mensaje){
            include_once("Views/paginas/success.php");
        }
        public function exist($mensaje)
        {   
        
            include_once("Views/paginas/error.php");
        }
    }
?>