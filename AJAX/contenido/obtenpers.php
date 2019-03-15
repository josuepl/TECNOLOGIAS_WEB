<?php

$usuario = "root";
    $contrasena = "4dm1n";
    $mbd = new PDO('mysql:host=localhost;dbname=pruebas', $usuario, $contrasena);


$id = $_GET['q'];
$gsent = $mbd->prepare("SELECT * FROM personas where id =".$id);
    $gsent->execute();

    print("PDO::FETCH_OBJ: ");

    //$result3 = $gsent->fetch(PDO::FETCH_OBJ);
    while($result3 = $gsent->fetch(PDO::FETCH_OBJ)){
        echo "<p>";
        print $result3->nombre."\n";
        print $result3->apellidos."\n";
        print $result3->sexo."\n";
        print $result3->id. "\n";
        print("\n");
        echo "</p>";
        
        echo "<table>";
        echo "<tr>";
        echo "<th>Persona ID</th>";
        echo "<td>" . $result3->id. "</td>";
        echo "<th>Nombre persona</th>";
        echo "<td>" . $result3->nombre. "</td>";
        echo "<th>Genero</th>";
        echo "<td>" . $result3->sexo. "</td>";
        echo "</tr>";
        echo "</table>";
    }





?>