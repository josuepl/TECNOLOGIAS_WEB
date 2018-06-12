 <?php
try {
    $usuario = "admin";
    $contrasena = "DB4dm1n@";
    $mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contrasena);
    //foreach($mbd->query('SELECT * from prueba') as $fila) {
    //    print_r($fila);
    

    $gsent = $mbd->prepare("SELECT * FROM prueba");
    $gsent->execute();

        /* Prueba de tipos de PDOStatement::fetch */
    printf("PDO::FETCH_ASSOC: \n");
    printf("Devolver la siguiente fila como un array indexado por nombre de colunmna\n");
    print_r("\n");
    while($result1 = $gsent->fetch(PDO::FETCH_ASSOC)){
        echo "<p>";
        print_r($result1);
        print("\n");
        echo "</p>";
    }
    $gsent = $mbd->prepare("SELECT * FROM prueba");
    $gsent->execute();

    print("PDO::FETCH_BOTH: ");
    print("Devolver la siguiente fila como un array indexado por nombre y número de columna\n");
    //$result3 = $gsent->fetch(PDO::FETCH_BOTH);
    while($result3 = $gsent->fetch(PDO::FETCH_BOTH)){
        echo "<p>";
        print_r($result3);
        print("\n");
        echo "</p>";
    }
    $gsent = $mbd->prepare("SELECT * FROM prueba");
    $gsent->execute();
    
    print("PDO::FETCH_LAZY: ");
    print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
    while($result4 = $gsent->fetch(PDO::FETCH_LAZY)){
        echo "<p>";
        print_r($result4);
        print("\n");
        echo "</p>";
    }
    $gsent = $mbd->prepare("SELECT * FROM prueba");
    $gsent->execute();

    print("PDO::FETCH_OBJ: ");
    print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
    //$result3 = $gsent->fetch(PDO::FETCH_OBJ);
    while($result3 = $gsent->fetch(PDO::FETCH_OBJ)){
        echo "<p>";
        print $result3->nombre."\n";
        print $result3->edad."\n";
        print $result3->fecha."\n";
        print("\n");
        echo "</p>";
    }
   


    $mbd = null;
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>