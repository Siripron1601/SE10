<?php
    $dsn = "mysql:dbname=se62_10;host=localhost";
    try {
        $con = new PDO($dsn,"se62_10","se62_10");
       
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();
    }
return $con;
?>