<?php
include_once("Models/registro.php");
include_once("Controllers/PaginasController.php");
include_once("conexion.php");
DB::crearInstancia();

    class RegistroController{
        public function inicio(){

        $Registro=Registro::consultar();
        include_once("Views/registro/inicio.php");
        }

        public function crear(){

            if($_POST){

                print_r($_POST);

                $id_registro=$_POST['id_registro'];
                $celda=$_POST['celda'];
                $placa=$_POST['placa_veh'];
                $llegada=$_POST['hora_llegara'];
                $salida=$_POST['hora_salida'];

                Registro::crear($id_registro,$celda,$placa,$llegada,$salida);
            }

            include_once("Views/registro/crear.php");
        }

        public function editar(){
            print_r($_GET);

            if($_POST){
                $id_registro=$_POST['id_registro'];
                $celda=$_POST['celda'];
                $placa=$_POST['placa_veh'];
                $llegada=$_POST['hora_llegara'];
                $salida=$_POST['hora_salida'];

                Registro::editar($id_registro,$celda,$placa,$llegada,$salida);
                header("Location:./?controlador=registro&accion=inicio");
                print_r($_POST);
                
            }
            $id_registro=$_GET['id_registro'];
            $registro=(Registro::buscar($id_registro));
            include_once("Views/registro/editar.php");
        }

        public function borrar(){
            print_r($_GET);

            $id_registro=$_GET['id_registro'];
            print_r( $id_registro);
            Registro::borrar($id_registro);
            header("Location:./?controlador=Registro&accion=inicio");
        }

        

    }
?>

