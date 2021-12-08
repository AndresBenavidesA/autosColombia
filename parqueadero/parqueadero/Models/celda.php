<?php

class Celda{

        public $id;
        public $tipo;
        public $estado;
        
    public function __construct($id, $tipo, $estado){
        $this->id=$id;
        $this->tipo=$tipo;
        $this->estado=$estado;
    }

    public static function consultar(){
        $listaCelda=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM celda");

        foreach($sql->fetchAll() as $celda){
            $listaCelda[] = new Celda($celda['id_celda'], $celda['tipo'],$celda['estado']);
        }

        return $listaCelda;
    }

    public static function crear($id,$tipo,$estado){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO celda(id_celda,tipo,estado) VALUES(?,?,?)");
        $sql->execute(array($id, $tipo, $estado));
    }

    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM celda WHERE id_celda=?");
        $sql->execute(array($id));
        
    }

    public static function buscar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM celda WHERE id_celda=?");
        $sql->execute(array($id));
        $celda=$sql->fetch();
        return new Celda($celda['id_celda'],$celda['tipo'],$celda['estado']);
        
    }

    public static function editar($id,$tipo,$estado){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE celda SET tipo=?,estado=? WHERE id_celda=?");
        $sql->execute(array($tipo, $estado));
    }


}




?>