<?php
    declare(strict_types=1);

    $usuario = "uuuuuuuuuuu";
    $iduser = "107";

    $pdo = require 'conectar.php';

    $sql = 'update usuarios set usuario = ? where iduser = ?';
    $prepare = $con->prepare($sql);
      
    $prepare->bindParam(1,$usuario);
    $prepare->bindParam(2,$iduser);

    $prepare->execute();
   
?>