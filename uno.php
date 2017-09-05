<!DOCTYPE html>
<html>
<body>


<?php
	function imprimir($persona){
		echo "<p> Hola mi nombre es $persona[nombre], $persona[apellido]</p>";
	}

	$persona1 = array(
		'nombre' => 'Josue'
		'apellido' => 'Perez'
	);

	$persona2 = array(
		'nombre' => 'JOSue'
		'apellido' => 'PereZ'
	);
	
imprimir($persona1);
imprimir($persona2);

?>

</body>
</html>