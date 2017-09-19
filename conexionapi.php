<?php
//MySQL clásico
require_once 'mysql-login.php';
//Conectando
$con = mysql_connect($hostname, $username, $password);
//Manejo de errores
if (!$con)
die("Falló la conexión a MySQL: " . mysql_error());
else
echo "Conexión exitosa!";
//Seleccionar base de datos
mysql_select_db($database)
or die("Seleccion de base de datos fallida " . mysql_error());
mysql_close();


//MySQL PDO
try {
$con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
print "Conexión exitosa!";
}
catch (PDOException $e) {
print "¡Error!: " . $e->getMessage() . "
";
die();
}
$con =null;


//MySQLi
$mysqli = new mysqli($hostname, $username,$password, $database);
if ($mysqli -> connect_errno) {
die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}
else
echo "Conexión exitosa!";
$mysqli -> mysqli_close();

?>