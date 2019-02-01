<?php

/**
 * 
 * @return \PDO
 */
function getConnection() {

    $dsn = 'mysql:host=mysql995.umbler.com:41890;dbname=eventdivulgation';
    $user = 'event';
    $pass = 'event123';
    
    
    try {
        $con = new PDO($dsn, $user, $pass);
        return $con;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return null;
    }
}
