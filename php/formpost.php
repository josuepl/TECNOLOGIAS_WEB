<html>
<body>
<form action="formpost.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
Tu email es: <?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?>
</body>
</html>