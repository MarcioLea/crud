<?php
    declare(strict_types=1);

    $usuario = "ttttt";
    $perfil = "adm";
    $tel = "77777777";
    $email = "aws@aws.com";
    $login = "rrrrrr";
    $senha = "zzzzzz";

    $con = require 'conectar.php';
    $sql = 'INSERT INTO usuarios(usuario, perfil, tel, email, loginUsuario, senha) VALUES(?, ?, ?, ?, ?, ?)';
    $prepare = $con->prepare($sql);

    $prepare->bindParam(1,$usuario);
    $prepare->bindParam(2,$perfil);
    $prepare->bindParam(3,$tel);
    $prepare->bindParam(4,$email);
    $prepare->bindParam(5,$login);
    $prepare->bindParam(6,$senha);
    $prepare->execute();
?>
