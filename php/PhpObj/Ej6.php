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
class ClaseExtendida extends ClaseSencilla
{
    // Redefinición del método padre
    function mostrarVar()
    {
        echo "Clase extendida\n";
        parent::mostrarVar();
    }
}

$extendida = new ClaseExtendida();
$extendida->mostrarVar();
?>