<?php



class Registro{

        public $id_registro;
        public $celda;
        public $placa;
        public $llegada;
        public $salida;

    public function __construct($id_registro,$celda,$placa,$llegada,$salida){
        $this->id_registro=$id_registro;
        $this->celda=$celda;
        $this->placa=$placa;
        $this->llegada=$llegada;
        $this->salida=$salida;
    }

    
    public static function consultar(){
        $listaRegistro=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM registro");

        foreach($sql->fetchAll() as $registro){
            $listaRegistro[] = new Registro($registro['id_registro'],$registro['celda'],$registro['placa_veh'],$registro['hora_llegara'],$registro['hora_salida']);
        }

        return $listaRegistro;
    }

    public static function crear($id_registro,$celda,$placa,$llegada,$salida){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO registro(id_registro,celda,placa_veh,hora_llegara,hora_salida) VALUES(?,?,?,?,?)");
        $sql->execute(array($id_registro,$celda,$placa,$llegada,$salida));
    }

    public static function borrar($id_registro){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM registro WHERE id_registro=?");
        $sql->execute(array($id_registro));
        
    }

    public static function buscar($id_registro){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM registro WHERE id_registro=?");
        $sql->execute(array($id_registro));
        $registro=$sql->fetch();
        return new Registro($registro['id_registro'],$registro['celda'],$registro['placa_veh'],$registro['hora_llegara'],$registro['hora_salida']);
        
    }

    public static function editar($id_registro,$celda,$placa,$llegada,$salida){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE registro SET celda=?,placa=?,hora_llegara=?,hora_salida=? WHERE id_registro=?");
        $sql->execute(array($celda,$placa,$llegada,$salida,$id_registro));
    }


}




?>