<?php 
class Animal
{ 
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
 // El método destructor
 public function __destruct() {
    echo "Objeto destruido";
 }
    function __construct0() 
    { 
        echo('__construct con 0 parametros: '.PHP_EOL);
        echo "<br>"; 
    } 
    
    function __construct1($a1) 
    { 
        echo('__construct con 1 parametro: '.$a1.PHP_EOL);
        echo "<br>"; 
    } 
    
    function __construct2($a1,$a2) 
    { 
        echo('__construct con dos parametros: '.$a1.','.$a2.PHP_EOL);
        echo "<br>";
    } 
    
    function __construct3($a1,$a2,$a3) 
    { 
        echo('__construct  con tres parametros: '.$a1.','.$a2.','.$a3.PHP_EOL);
        echo "<br>"; 
    } 

     
} 
$o = new Animal();
$o = new Animal('oveja'); 
$o = new Animal('oveja','gato'); 
$o = new Animal('oveja','gato','perro'); 


//unset($o);

// results: 
// __construct with 1 param called: sheep 
// __construct with 2 params called: sheep,cat 
// __construct with 3 params called: sheep,cat,dog 
?>