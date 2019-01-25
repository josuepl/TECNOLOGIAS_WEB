<?php
class Foo
{
    public $bar = 'propiedad';
    
    public function bar() {
        return 'método';
    }
}

$obj = new Foo();
echo $obj->bar,"<br>" ,PHP_EOL, $obj->bar(),"<br>", PHP_EOL;
?>