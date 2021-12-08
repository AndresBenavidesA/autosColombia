<?php



class Pago{

        public $id;
        public $mes;
        public $precios;
        public $usuarios;

    public function __construct($id,$mes,$precios,$usuarios){
        $this->id=$id;
        $this->mes=$mes;
        $this->precios=$precios;
        $this->usuarios=$usuarios;
        
    }

    
    public static function consultar(){
        $listaPago=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM pago");

        foreach($sql->fetchAll() as $pago){
            $listaPago[] = new Pago($pago['id_pago'],$pago['mes'],$pago['id_precios'],$pago['id_usuarios']);
        }

        return $listaPago;
    }

    public static function crear($id,$mes,$precios,$usuarios){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO pago(id_pago,mes,id_precios,id_usuarios) VALUES(?,?,?,?)");
        $sql->execute(array($id,$mes,$precios,$usuarios));
    }

    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM pago WHERE id_pago=?");
        $sql->execute(array($id));
        
    }

    public static function buscar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM pago WHERE id_pago=?");
        $sql->execute(array($id));
        $pago=$sql->fetch();
        return new Pago($pago['id_pago'],$pago['mes'],$pago['id_precios'],$pago['id_usuarios']);
        

    }

    public static function editar($id,$mes,$precios,$usuarios){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE pago SET mes=?,id_precios=?,id_usuarios WHERE id_pago=?");
        $sql->execute(array($mes,$precios,$usuarios,$id));
    }


}




?>