<?php
class phpobj{
    public $nombre;
    public $edad;
    public $estado;
    public $genero;
    public $telefono;
}

$myObj = new phpobj();
$myObj->nombre = "Pepe";
$myObj->edad = 30;
$myObj->estado = "Puebla";
$myObj->genero = "masculino";
$myObj->telefono = "11234567889";

$myJSON = json_encode($myObj);
$file = 'clientesobj.json';
file_put_contents($file, $myJSON);

echo $myJSON;
?>