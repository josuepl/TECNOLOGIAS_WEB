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
    echo "<script>
    var head=[''];
    </script>";
    while($result3 = $gsent->fetch(PDO::FETCH_OBJ)){
        echo "<p>";
        print $result3->nombre."\n";
        print $result3->apellidos."\n";
        print $result3->sexo."\n";
        print("\n");
        echo "</p>";
        echo "<script>
            var id =".$result3->id.";
            </script>";
        
        echo "<article id='art".$result3->id."'>";
        echo "<script>
            
            head.push('head".$result3->id ."');
            </script>";
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
    <div id="div1">
        
    </div>
    <button onclick="Click()">Dar Click</button>

    <script>
    console.log(idp);
    var nparrafo = document.createElement("header");
    var ntexto = document.createTextNode(heatg5thgd[1]);
    //var nid = document.createAttribute("id");
    nparrafo.appendChild(ntexto);
    nparrafo.setAttribute("id","p3");


    function Click(){
        var element = document.getElementById("div1");
        element.appendChild(nparrafo);
    }
    </script>
    </body>

</html>
