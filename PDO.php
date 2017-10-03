<?php
$servername = "localhost";
$username = "admin";
$password = "4DM1N";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Exitosa"; 
    }
catch(PDOException $ex)
    {
    echo "Conexion fallida: " . $ex->getMessage();
    }


    $conn = null;
?>