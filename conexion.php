<?php

class conectdb{
    private $server="localhost";
    private $user="root";
    private $password="";
    private $conect;

    public function __construct(){
        try{
            $this->conect= new PDO("mysql:host=$this->server;dbname=album",$this->user, $this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            return "falla de conexion".$e;

        }
    }

    public function run($sql){
        $this->conect->exec($sql);
        return $this->conect->lastInsertId();

    }
    //function for creact, delect and consult
    public function query($sql){
        $order=$this->conect->prepare($sql);
        $order->execute();
        return $order->fetchAll();

    }

    
    
}


?>