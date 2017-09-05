<!DOCTYPE html>
<html>
<body>

<?php
function Prueba() {
    static $x = 0;
    echo $x;
    $x++;
}

Prueba();
echo "<br>";
Prueba();
echo "<br>";
Prueba();
?> 

</body>
</html>