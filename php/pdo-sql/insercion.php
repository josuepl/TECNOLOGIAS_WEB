<?php
$servername = "localhost";
$usuario = "admin";
$contrasena = "DB4dm1n@";
$dbname = "ejemplo";
$nom="Usuario3";
$edad=55;
$fech="2034/12/12";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO prueba (nombre, edad, fecha)
    VALUES ('".$nom."', ".$edad.", '".$fech."')";
    // use exec() because no results are returned
    echo $sql;
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>