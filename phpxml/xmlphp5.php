<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) { 
    echo $books->title . ", "; 
    echo $books->author->nombre . ", "; 
    echo $books->year . ", ";
    echo $books->price . "<br>"; 
}
//$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
    echo "<ul>";
    echo "<li>libro 1: ".$xml->book[0]->author->pais."</li>";
    echo "<li>libro 2: ".$xml->book[1]->author->pais."</li>";
    echo "<li>libro 3: ".$xml->book[2]->author->pais."</li>";
    echo "<li>libro 4: ".$xml->book[3]->author->pais."</li>";
    echo "</ul>";
?>