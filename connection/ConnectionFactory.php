<?php

abstract class ConnectionFactory{
    
    private $conn;
    private $username = "event";
    private $password = "event123";
    
    public static function getConnetion(){
        
        try{
            $conn = new PDO('mysql:host=mysql995.umbler.com:41890;dbname=eventdivulgation', $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Erro: '.$e->getMessage();
            return null;
        }
        
        
        
    }
    
    
    
}

$conn = ConnectionFactory::getConnetion();
echo 'Connection: '.$conn;