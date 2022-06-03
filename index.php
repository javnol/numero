<?php
    require_once("Numero.php");
    $numero = new Numero(-5);
    //echo $numero->n;
    echo $numero->n . "<hr />";
    echo $numero->va();
    if ($numero->par()) echo "<hr />Es par.";
    else echo "<hr />Es impar";
?>