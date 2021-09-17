<?php

    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $dni  = $_REQUEST["dni"];
    $link  = $_REQUEST["link"];

    echo "Hola " . $nombre . " " . $apellido ." " . $dni . "<br>";

    echo '<a href="'. $link . '">Ir a página 2</a>';

?>


<a href="index.html">Link estático</a>