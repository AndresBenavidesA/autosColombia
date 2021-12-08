<?php

class Precios{

        public $id;
        public $costo;

    public function __construct($id,$costo){
        $this->id=$id;
        $this->costo=$costo;
    }

    
    public static function consultar(){
        $listaPrecios=[];
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->query("SELECT * FROM precios");

        foreach($sql->fetchAll() as $precios){
            $listaPrecios[] = new Precios($precios['id_precios'],$precios['costo']);
        }

        return $listaPrecios;
    }

    public static function crear($id,$costo){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("INSERT INTO precios(id_precios,costo) VALUES(?,?)");
        $sql->execute(array($id,$costo));
    }

    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("DELETE FROM precios WHERE id=?");
        $sql->execute(array($id));
        
    }

    public static function buscar($id){
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->prepare("SELECT * FROM precios WHERE id_precios=?");
        $sql->execute(array($id));
        $precios=$sql->fetch();
        return new Precios($precios['id_precios'], $precios['costo']);
        
    }

    public static function editar($id,$costo){

        $conexionDB=DB::crearInstancia();

        $sql= $conexionDB->prepare("UPDATE precios SET costo=? WHERE id_precios=?");
        $sql->execute(array($costo,$id));
    }


}




?>