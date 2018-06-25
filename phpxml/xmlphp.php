<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<nota>
<para>Tove</para>
<dest>Jani</dest>
<encabezado>Reminder</encabezado>
<texto>Don't forget me this weekend!</texto>
</nota>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>