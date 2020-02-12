 <?php
try {
 $usuario = 'root';
    $contrasena = "4dm1n";
    $mbd = new PDO('mysql:host=localhost;dbname=pruebas', $usuario, $contrasena);
    echo "Conectado";
    //foreach($mbd->query('SELECT * from prueba') as $fila) {
    //    print_r($fila);
    

    $gsent = $mbd->prepare("SELECT * FROM personas");
    $gsent->execute();

    print("PDO::FETCH_OBJ: ");
    print("Devolver la siguiente fila como un objeto anónimo con nombres de columna como propiedades\n");
    //$result3 = $gsent->fetch(PDO::FETCH_OBJ);
    while($result3 = $gsent->fetch(PDO::FETCH_OBJ)){
        echo "<p>";
        print $result3->nombre."\n";
        print $result3->apellidos."\n";
        print $result3->sexo."\n";
        print("\n");
        echo "</p>";
        echo "<article id='art".$result3->id."'>";
        echo "<header id='head".$result3->id."'>".$result3->nombre."</header>";
        echo "<p id='p".$result3->id."'>".$result3->apellidos."</p>";
        echo "<footer id='f".$result3->id."'>".$result3->sexo."</footer>";
        echo "</article>";
        echo "<script>
        var idp=".$result3->id.
        ";console.log(idp);
        </script>
        ";
    }
   


    $mbd = null;
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<html>
    <head>
    <meta></meta>
    </head>
    <body>
    <button onclick="Click()">Dar Click</button>

    <script>
    console.log(idp);
    var element = document.getElementById("div1");
    var child = document.getElementById("p5");
    //element.insertBefore(nparrafo,child);

    function Click(){
        element.replaceChild(nparrafo, child);
    }
    </script>
    </body>

</html>