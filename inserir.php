<?php
    include('conectar.php');

    $usuario = "nome";
    $perfil = "adm";
    $tel = "99999999";
    $email = "email@gmail.com";
    $login = "seulogin";
    $senha = "suasenha";

    $stmt = $con->prepare('INSERT INTO usuarios(usuario, perfil, tel, email, loginUsuario, senha) VALUES(?, ?, ?, ?, ?, ?)');
    $stmt->bindParam(1,$usuario);
    $stmt->bindParam(2,$perfil);
    $stmt->bindParam(3,$tel);
    $stmt->bindParam(4,$email);
    $stmt->bindParam(5,$login);
    $stmt->bindParam(6,$senha);
    $stmt->execute();
?>
