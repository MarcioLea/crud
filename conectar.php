<?php

    declare(strict_types=1);

    $con = null;

    try {
        $con = new PDO("mysql:host=localhost;dbname=banco", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    return $con;
    
?>