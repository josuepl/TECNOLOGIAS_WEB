<?php
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}
?>

<?php

$instancia = new ClaseSencilla();

$asignada   =  $instancia;
$referencia =& $instancia;

$instancia->var = '$asignada tendrá este valor';

$instancia = null; // $instancia y $referencia son null

var_dump($instancia);
echo "<br>";
var_dump($referencia);
echo "<br>";
var_dump($asignada);
echo "<br>";
?>