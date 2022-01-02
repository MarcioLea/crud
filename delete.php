<?php
    declare(strict_types=1);

    $iduser = "107";

    $pdo = require 'conectar.php';
    $sql = 'delete from usuarios where iduser = ?';

    $prepare = $con->prepare($sql);

    $prepare->bindParam(1,$iduser);

    $prepare->execute();
   
?>