6
Conceptos Básicos: Los nombres de los manejadores de eventos son construidos
agregando el prefijo on al nombre del evento. Por ejemplo, el nombre del
manejador de eventos para el evento click es onclick. Cuando estamos
hablando sobre onclick usualmente hacemos referencia al código que será
ejecutado cuando el evento click se produzca.
Antes de HTML5, esta era la única técnica disponible para usar manejadores de
eventos desde Javascript que funcionaba en todos los navegadores. Algunos fabricantes
de navegadores estaban desarrollando sus propios sistemas, pero nada fue adoptado por
todos hasta que el nuevo estándar fue declarado. Por este motivo recomendamos utilizar
esta técnica por razones de compatibilidad, pero no la sugerimos para sus aplicaciones
HTML5.
El método addEventListener()
El método addEventListener() es la técnica ideal y la que es considerada como
estándar por la especificación de HTML5. Este método tiene tres argumentos: el nombre
del evento, la función a ser ejecutada y un valor booleano (falso o verdadero) que indica
cómo un evento será disparado en elementos superpuestos.
<!DOCTYPE html>
<html lang="es">
<head>
<title>Este texto es el título del documento</title>
<script>
function mostraralerta(){
alert('hizo clic!');
}
function hacerclic(){
var elemento=document.getElementsByTagName('p')[0];
elemento.addEventListener(‘click’, mostraralerta, false);
}
window.addEventListener(‘load’, hacerclic, false);
</script>
</head>
<body>
<div id=”principal”>
<p>Hacer Clic</p>
<p>No puede hacer Clic</p>
</div>
</body>
</html>