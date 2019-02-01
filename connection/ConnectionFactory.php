<?php

abstract class ConnectionFactory{
    
    private static $conn;
    
    public static function getConnetion(){
        
        try{
            $conn = new PDO('mysql:host=localhost;dbname=eventdivulgation', 'event', 'event123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo 'Erro: '.$e->getMessage();
            return null;
        }
        
    }
}
    



$connection = ConnectionFactory::getConnetion();

if(is_resource($connection) && get_resource_type($connection) === 'mysql link')
{
    echo 'conectado';
}
else
{
    echo 'Não conectado';
}

