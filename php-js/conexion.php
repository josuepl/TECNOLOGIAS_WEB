<?php
    $usuario = 'root';
    $contrasena = "4dm1n";
    $mbd = new PDO('mysql:host=localhost;dbname=pruebas', $usuario, $contrasena);
    echo "Conectado";
?>