<?php
$servername = "localhost";
$usuario = "admin";
$contrasena = "DB4dm1n@";
$dbname = "ejemplo";
$nom="josue";
$edad=45;
$fech="2018/09/06";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM prueba WHERE nombre='".$nom."'";
    echo $sql;
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>