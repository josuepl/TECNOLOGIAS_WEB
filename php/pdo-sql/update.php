<?php
$servername = "localhost";
$usuario = "admin";
$contrasena = "DB4dm1n@";
$dbname = "ejemplo";
$nom="Josue";
$edad=45;
$fech="2018/09/06";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usuario, $contrasena);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE prueba SET nombre='".$nom."' WHERE id_per=7";
    echo $sql;

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>