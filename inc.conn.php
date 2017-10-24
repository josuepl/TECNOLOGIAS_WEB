<?php 
    $usuario= "josue";
    $contraseña = "1234";
    try{
        $mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
        print "Conexión exitosa";
    }
    //$mbd = null;
    catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>