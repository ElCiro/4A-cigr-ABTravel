<?php 
require_once "conexion.php";

class ModeloBlog{

    static public function mdlMostrarblog($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetch();
        //$stmt->close();
        $stmt =null;
    }
}