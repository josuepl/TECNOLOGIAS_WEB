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
class A
{
    function visualiza()
    {
        if (isset($this)) {
            echo '$this está definida (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this no está definida.\n";
        }
    }
}

class B
{
    function prueb()
    {
        A::visualiza();
    }
}

$a = new A();
$a->visualiza();

A::visualiza();
$b = new B();
$b->prueb();

B::prueb();
?>