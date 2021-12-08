<?php
include_once("Models/vehiculo.php");
include_once("Controllers/PaginasController.php");
include_once("conexion.php");
DB::crearInstancia();

    class VehiculoController{
        public function inicio(){

        $Vehiculo=Vehiculo::consultar();
        include_once("Views/vehiculo/inicio.php");
        }

        public function crear(){
            $Vehiculo=Vehiculo::consultar();
            if($_POST){

                print_r($_POST);

                $placa=$_POST['placa'];
                $tipo=$_POST['tipo'];
                $marca=$_POST['marca'];
                $color=$_POST['color'];
                $celda=$_POST['id_celda'];
                $usuarios=$_POST['id_usuarios'];
                

                Vehiculo::crear($placa,$tipo,$marca,$color,$celda,$usuarios);
                
            }
            

            include_once("Views/vehiculo/crear.php");
        }

        public function editar(){
            print_r($_GET);

            

            if($_POST){
                $placa=$_POST['placa'];
                $tipo=$_POST['tipo'];
                $marca=$_POST['marca'];
                $color=$_POST['color'];
                $celda=$_POST['id_celda'];
                $usuarios=$_POST['id_usuarios'];

                Vehiculo::editar($placa,$tipo,$marca,$color,$celda,$usuarios);
                header("Location:./?controlador=vehiculo&accion=inicio");
                print_r($_POST);
            }
            $placa=$_GET['placa'];
            $vehiculo=(Vehiculo::buscar($placa));
            include_once("Views/vehiculo/editar.php");
        }

        public function borrar(){
            print_r($_GET);

            $placa=$_GET['placa'];
            print_r( $placa);
            Vehiculo::borrar($placa);
            header("Location:./?controlador=vehiculo&accion=inicio");
        }

        

    }
?>

