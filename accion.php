
<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>pagina</title>
  </head>
 <body>
 	<p>
	Hola 
	<?php echo htmlspecialchars($_POST['nombre']); ?> .

	Usted tiene <?php echo (int)$_POST['edad']; ?> años.
	</p>

 </body>>

  
</html>


