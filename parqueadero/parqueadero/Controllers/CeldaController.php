<?php
include_once("Models/celda.php");
include_once("Controllers/PaginasController.php");
include_once("conexion.php");
DB::crearInstancia();

    class CeldaController{
        public function inicio(){

        $Celda=Celda::consultar();
        include_once("Views/celda/inicio.php");
        }

        public function crear(){

            if($_POST){

                print_r($_POST);

                $id=$_POST['id_celda'];
                $tipo=$_POST['tipo'];
                $estado=$_POST['estado'];
                

                Celda::crear($id,$tipo,$estado);
            }

            include_once("Views/celda/crear.php");
        }

        public function editar(){
            print_r($_GET);

            

            if($_POST){
                $id=$_POST['id_celda'];
                $tipo=$_POST['tipo'];
                $estado=$_POST['estado'];
                

                Celda::editar($id,$tipo,$estado);

                print_r($_POST);
            }
            $id=$_GET['id_celda'];
            $celda=(Celda::buscar($id));
            include_once("Views/celda/editar.php");
        }

        public function borrar(){
            print_r($_GET);

            $id=$_GET['id_celda'];
            print_r( $id);
            Celda::borrar($id);
            header("Location:./?controlador=Celda&accion=inicio");
        }

        

    }
?>

