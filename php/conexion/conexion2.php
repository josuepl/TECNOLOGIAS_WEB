 <?php
try {
    $usuario = "admin";
    $contrasena = "DB4dm1n@";
    $mbd = new PDO('mysql:host=localhost;dbname=ejemplo', $usuario, $contrasena);
    foreach($mbd->query('SELECT * from prueba') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>