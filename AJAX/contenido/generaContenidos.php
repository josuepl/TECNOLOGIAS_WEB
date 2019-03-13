<?php
// Frases de contenido de las que se selecciona aleatoriamente una de ellas
$frases = array("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
                "Integer augue. Maecenas vel arcu.",
                "Nunc ipsum enim, pretium vel, blandit quis, rutrum sit amet, mauris.",
                "Proin at lectus mattis elit facilisis aliquam.",
                "Sed accumsan, neque in luctus egestas, ipsum enim hendrerit massa, at venenatis felis purus sed velit.",
                "Mauris sit amet magna ut leo ullamcorper semper.",
                "Vivamus venenatis consequat massa.",
                "Praesent erat justo, varius eu, porta at, sollicitudin in, nibh.",
                "Aenean ligula ante, vehicula sit amet, vestibulum eu, mattis non, mauris.",
                "Ut suscipit fermentum eros. Nullam ut mauris vel eros placerat cursus.",
                "Praesent non lectus. Nam condimentum nisi nec felis.",
                "Sed tincidunt ullamcorper pede.",
                "Curabitur facilisis, quam sed egestas tincidunt, justo nisl tempor odio, non auctor metus sapien sed risus.",
                "Fusce risus lectus, consequat at, molestie sit amet, auctor tristique, massa.",
                "Mauris vitae nisi. Aliquam tempus.",
                "Etiam eu neque sit amet nibh tempus lacinia.",
                "Nunc rutrum lorem eu erat. Proin ac felis. Fusce commodo leo.");

// Generar un número aleatorio comprendido entre 0 y el número total de frases disponibles
srand((double)microtime()*1000000);
$numeroAleatorio = rand(0, count($frases)-1);

// La respuesta de este script consiste en una frase seleccionada aleatoriamente
echo $frases[$numeroAleatorio];
?>