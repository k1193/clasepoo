<?php
// Programacion orientada  a objetos
 
include('Persona.php');

//como crear un objeto o instancia de la clase

$meganfox = new Persona();
echo($meganfox->nombre);
$meganfox->nombre="Megan";
echo("<br>");
echo($meganfox->nombre);

$nombre = array("juan","ana");
echo("<br>");
echo $nombre[0];

echo("<br>");
$meganfox->saludar ($nombre[0]);



?>