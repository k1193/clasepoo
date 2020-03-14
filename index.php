<?php
// Programacion orientada  a objetos
 
include('Persona.php');

//como crear un objeto o instancia de la clase

$meganfox = new Persona();
echo($meganfox->nombre);
$meganfox->nombre="megan";
echo("<br>");
echo($meganfox->nombre);


?>