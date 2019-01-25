<?php
class Foo
{
    public $bar;
    
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}


$obj = new Foo();
$func = $obj->bar;
echo $func(), PHP_EOL;


?>