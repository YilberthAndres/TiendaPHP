<?php 
    class db{
        private $host = "localhost:3307";
        private $dbname = "pruebamvc";
        private $user = "root";
        private $password = "";
        public function conexion(){
            try {
                $PDO  = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname , $this->user, $this->password);
                return $PDO;
            } catch (PDOException $e) {
                //throw $th;

                return $e->getMessage();
            }
        }
    }
?>