<?php
include_once("Models/pago.php");
include_once("Controllers/PaginasController.php");
include_once("conexion.php");
DB::crearInstancia();

    class PagoController{
        public function inicio(){

        $Pago=Pago::consultar();
        include_once("Views/pago/inicio.php");
        }

        public function crear(){

            if($_POST){

                print_r($_POST);

                $id=$_POST['id_pago'];
                $mes=$_POST['mes'];
                $precios=$_POST['id_precios'];
                $usuarios=$_POST['id_usuarios'];
                
                Pago::crear($id,$mes,$precios,$usuarios);
            }

            include_once("Views/pago/crear.php");
        }

        public function editar(){
            print_r($_GET);

            

            if($_POST){
                $id_usuarios=$_POST['id_usuarios'];
                $nombre=$_POST['nombre'];
                $apellido=$_POST['apellido'];
                $cedula=$_POST['cedula'];
                $telefono=$_POST['telefono'];
                $telefono_se=$_POST['telefono_se'];
                $direccion=$_POST['direccion'];

                Usuarios::editar($id_usuarios,$nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion);

                print_r($_POST);
            }
            $id_usuarios=$_GET['id_usuarios'];
            $usuarios=(Usuarios::buscar($id_usuarios));
            include_once("Views/usuarios/editar.php");
        }

        public function borrar(){
            print_r($_GET);

            $id_usuarios=$_GET['id_usuarios'];
            print_r( $id_usuarios);
            Usuarios::borrar($id_usuarios);
            header("Location:./?controlador=Usuarios&accion=inicio");
        }

        

    }
?>

