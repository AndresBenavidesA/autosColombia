<?php



class Usuarios{

        public $id_usuarios;
        public $nombre;
        public $apellido;
        public $cedula;
        public $telefono;
        public $telefono_se;
        public $direccion;

    public function __construct($id_usuarios,$nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion){
        $this->id_usuarios=$id_usuarios;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
        $this->telefono=$telefono;
        $this->telefono_se=$telefono_se;
        $this->direccion=$direccion;
    }

    
    public static function consultar(){
        $listaUsuarios=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM usuarios");

        foreach($sql->fetchAll() as $usuarios){
            $listaUsuarios[] = new Usuarios($usuarios['id_usuarios'], $usuarios['nombre'],$usuarios['apellido'],$usuarios['cedula'],$usuarios['telefono'],$usuarios['telefono_se'],$usuarios['direccion']);
        }

        return $listaUsuarios;
    }

    public static function crear($id_usuarios,$nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO usuarios(id_usuarios,nombre,apellido,cedula,telefono,telefono_se,direccion) VALUES(?,?,?,?,?,?,?)");
        $sql->execute(array($id_usuarios,$nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion));
    }

    public static function borrar($id_usuarios){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM usuarios WHERE id_usuarios=?");
        $sql->execute(array($id_usuarios));
        
    }

    public static function buscar($id_usuarios){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM usuarios WHERE id_usuarios=?");
        $sql->execute(array($id_usuarios));
        $usuarios=$sql->fetch();
        return new Usuarios($usuarios['id_usuarios'], $usuarios['nombre'],$usuarios['apellido'],$usuarios['cedula'],$usuarios['telefono'],$usuarios['telefono_se'],$usuarios['direccion']);
        
    }

    public static function editar($id_usuarios,$nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE usuarios SET nombre=?,apellido=?,cedula=?,telefono=?,telefono_se=?,direccion=? WHERE id_usuarios=?");
        $sql->execute(array($nombre,$apellido,$cedula,$telefono,$telefono_se,$direccion,$id_usuarios));
    }


}




?>