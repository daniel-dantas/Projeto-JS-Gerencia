<?php

/**
 * 
 * @return \PDO
 */
function getConnection() {

    $dsn = 'mysql:host=localhost:3306;dbname=eventdivulgation';
    $user = 'root';
    $pass = '';
    
    
    try {
        $con = new PDO($dsn, $user, $pass);
        return $con;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return null;
    }
}
