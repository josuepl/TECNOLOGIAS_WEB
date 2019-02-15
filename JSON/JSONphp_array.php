<?php

$arr_clientes = array('nombre'=> 'Pepe', 'edad'=> '30', 'genero'=> 'masculino',
        'email'=> 'pepe@dominio.com', 'estado'=> 'Puebla', 'telefono'=> '11234567889');


//Creamos el JSON
$json_string = json_encode($arr_clientes);
$file = 'clientes.json';
file_put_contents($file, $json_string);

?>