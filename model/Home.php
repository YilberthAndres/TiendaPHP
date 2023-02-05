<?php

    class homeModel {
        private $PDO;
        private $tabla;
        function __construct(){
            require_once("../../config/db.php");
            $con = new db();

            $this->PDO = $con->conexion();
            $this->tabla = 'users';
        }
        
        public function agregarNuevoUsuario($email,$password){
            $sql = "INSERT INTO `$this->tabla` ( `name`, `email`, `password`) 
                VALUES ('".$email."' ,'".$email."' , '".$password."')";

            $statement = $this->PDO->prepare($sql);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function obtenerclave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM `$this->tabla` WHERE email = :correo");
            $statement->bindParam(":correo",$correo);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }
?>