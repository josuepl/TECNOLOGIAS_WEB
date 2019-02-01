<?php
class Persona {
    public $nombre;       // Es una propiedad. Accesible desde el objeto
    public $edad;        // Es una propiedad. Accesible desde el objeto
    private $sexo;       // Es otra propiedad. Accesible desde la clase
 
    // El método constructor de la clase
    /* public function __construct($nombre, $edad) {
       $this -> nombre = $nombre;
       $this -> edad = $edad;
    }
    */
    public function __construct() {
        
     }
 
    // El método destructor
    public function __destruct() {
       echo "Objeto destruido";
    }
 
    // Es un método setter para poner la propiedad privada sexo
    public function setSexo($sexo) {
       $this -> sexo = $sexo;
    }
 
    // Es un método getter para retornar la propiedad privada sexo
    public function getSexo() {
       return $this -> sexo;
    }
 
    // Es un método de la clase
    public function saludar(){  
       echo "Hola, mundo!";
    }
 }

    $pepe = new Persona();
    $pepe -> edad = 45;
    echo $pepe -> edad;           // El resultado es 45
    echo "<br>";
    $pepe -> saludar();           // El resultado es "Hola, mundo!"
    echo "<br>";
    $pepe -> setSexo("Hombre");   // Pone el sexo "Hombre" a $pepe
    echo "<br>";
    $pepe -> getSexo();           // El resultado es "Hombre"
    echo "<br>";

    //unset($pepe);
    //$pepe = null;
?>