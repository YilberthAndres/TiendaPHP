<?php 

class personaModel{
    private $PDO;

    public function __construct(){

        require_once("../../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($persona){
        $sql = "INSERT INTO `personas` ( `nombre`, `apellido`, `foto`)
        VALUES ( '".$persona['nombre']."' , '".$persona['apellido']."', '".$persona['foto']."' )";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id){
        $sql = "SELECT * FROM `personas` where id = '$id' limit 1";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function delete($id){
        $sql = "DELETE FROM `personas` WHERE `id` = '$id'";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function all(){
        $sql = "SELECT * FROM `personas`";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function actualizar($persona){
        $sql = "UPDATE `personas` SET
            `nombre` = '".$persona['nombre']."',
        `apellido`   = '".$persona['apellido']."'
        WHERE id = '".$persona['id']."'";
        $stament = $this->PDO->prepare($sql);
        return ($stament->execute()) ?  true : false;
    }
}
?>