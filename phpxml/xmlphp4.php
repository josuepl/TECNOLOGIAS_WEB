<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->de . "<br>";
echo $xml->dest . "<br>";
echo $xml->enc . "<br>";
echo $xml->texto;
?>