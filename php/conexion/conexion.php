<?php
    $usuario = 'admin';
    $contrasena = "DB4dm1n@";
    $mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contrasena);
    echo "Conectado";
?>