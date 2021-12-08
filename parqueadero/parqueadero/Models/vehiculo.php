<?php



class Vehiculo{

        public $placa;
        public $tipo;
        public $marca;
        public $color;
        public $celda;
        public $usuarios;
        
    public function __construct($placa,$tipo,$marca,$color,$celda,$usuarios){
        $this->placa=$placa;
        $this->tipo=$tipo;
        $this->marca=$marca;
        $this->color=$color;
        $this->celda=$celda;
        $this->usuarios=$usuarios;
    }

    
    public static function consultar(){
        $listaVehiculo=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM vehiculo");

        foreach($sql->fetchAll() as $vehiculo){
            $listaVehiculo[] = new Vehiculo($vehiculo['placa'], $vehiculo['tipo'], $vehiculo['marca'], $vehiculo['color'], $vehiculo['id_celda'], $vehiculo['id_usuarios']);
        }

        return $listaVehiculo;
    }

    public static function crear($placa,$tipo,$marca,$color,$celda,$usuarios){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO vehiculo(placa,tipo,marca,color,id_celda,id_usuarios) VALUES(?,?,?,?,?,?)");
        $sql->execute(array($placa,$tipo,$marca,$color,$celda,$usuarios));
    }

    public static function borrar($placa){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM vehiculo WHERE placa=?");
        $sql->execute(array($placa));
        
    }

    public static function buscar($placa){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM vehiculo WHERE placa=?");
        $sql->execute(array($placa));
        $vehiculo=$sql->fetch();
        return new Vehiculo($vehiculo['placa'],$vehiculo['tipo'],$vehiculo['marca'],$vehiculo['color'],$vehiculo['id_celda'],$vehiculo['id_usuarios']);
        
    }

    public static function editar($placa,$tipo,$marca,$color,$celda,$usuarios){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE vehiculo SET tipo=?,marca=?,color=?,celda=?,id_usuarios=? WHERE placa=?");
        $sql->execute(array($tipo,$marca,$color,$celda,$usuarios,$placa));
    }


}




?>