<?php

//Leemos el JSON
$datos_clientes = file_get_contents("clientes.json");
$json_clientes = json_decode($datos_clientes, true);

foreach ($json_clientes as $cliente) {
    
    echo $cliente."<br>";
}

?>