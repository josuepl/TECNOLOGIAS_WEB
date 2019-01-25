<?php
class Prueba
{
    static public function getNew()
    {
        return new static;
    }
}

class Hija extends Prueba
{}

$obj1 = new Prueba();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
echo "<br>";
$obj3 = Prueba::getNew();
var_dump($obj3 instanceof Prueba);
echo "<br>";
$obj4 = Hija::getNew();
var_dump($obj4 instanceof Hija);
echo "<br>";
?>