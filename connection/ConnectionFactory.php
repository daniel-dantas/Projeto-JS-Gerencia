<?php

/**
 * 
 * @return \PDO
 */
function getConnection() {

    $dsn = 'mysql:host=localhost;dbname=eventdivulgation';
    $user = 'xsrdandanx';
    $pass = '123';
    
    
    try {
        $con = new PDO($dsn, $user, $pass);
        return $con;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        return null;
    }
}
