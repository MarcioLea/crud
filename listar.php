<?php
    include('conectar.php');

    $rs = $con->query('SELECT * FROM usuarios');
    while($row = $rs->fetch(PDO::FETCH_OBJ)){
        echo $row->iduser . '<br />';
        echo $row->usuario . '<br />';
        echo $row->perfil . '<br />';
        echo $row->tel . '<br />';
        echo $row->email . '<br />';
        echo $row->loginUsuario . '<br />';
        echo $row->senha . '<br />';
}
?>