<?php

class Database{

    private $user;
    private $password;
    private $dbName;
    private $host;
    private $charset;

    public function __construct(){
        $this->user     = 'root';
        $this->password = '';
        $this->dbName   = 'vete';
        $this->host     = 'localhost';
        $this->charset  = 'utf8mb4';
    }

    public function conexion(){
        try{
            $conexion = "mysql:host=".$this->host.";dbname=".$this->dbName.";charset=".$this->charset;

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                       PDO::ATTR_EMULATE_PREPARES => false];
            
            $pdo = new PDO($conexion,$this->user,$this->password,$options);

            return $pdo;
        }catch(PDOException $e){
            print_r("Error conexión... ".$e->getMessage());
        }
        
    }


}

?>