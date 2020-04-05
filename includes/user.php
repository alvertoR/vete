<?php

include_once 'database.php';

class User extends Database{
    private $nombre;
    private $rol;

    public function userExists($cc, $pass){
        $query = $this->conexion()->prepare('select*from user where cc =:cc');
        $query->execute([':cc'=>$cc]);

        while($userdb = $query->fetch(PDO::FETCH_NUM)){
            if(password_verify($pass, $userdb[2])){
                return true;
            }else{
                return false;
            }
        }
    }

    public function propExists($cc){
        $query = $this->conexion()->prepare('select*from prop where cc =:cc');
        $query->execute([':cc'=>$cc]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }

    }

    public function getProp($cc){
        $query = $this->conexion()->prepare('select*from prop where cc =:cc');
        $query->execute([':cc'=>$cc]);

        return $query;
    }

    public function addProp($cc,$name,$adress,$email,$prof,$rol){
        $query = $this->conexion()->prepare('insert into prop(cc,nombre,prof,direccion,email,rol)
                                             values(:cc,:nombre,:prof,:direccion,:email,:rol)');
        $query->execute([':cc'=>$cc,':nombre'=>$name,':prof'=>$prof,':direccion'=>$adress,':email'=>$email,':rol'=>$rol]);
    }

    public function setUser($cc,$rol){

        if($rol == 1){
            $query = $this->conexion()->prepare('select*from user where cc =:cc');
        }else{
            $query = $this->conexion()->prepare('select*from prop where cc =:cc');
        }
        
        $query->execute([':cc' => $cc]);

        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->rol    = $currentUser['rol'];
        }
    }

    public function getName(){
        return $this->nombre;
    }

    public function getRol(){
        return $this->rol;
    }
}

?>