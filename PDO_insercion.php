<?php
$servername = "localhost";
$username = "admin";
$password = "4DM1N";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO testtable (nomb, edad, pass)
    VALUES ('Josue', 15, 'JOSUEpass')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nuevo dato insertado";
    }
catch(PDOException $ex)
    {
    echo $sql . "<br>" . $ex->getMessage();
    }

$conn = null;
?>