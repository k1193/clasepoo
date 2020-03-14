<?php
class Persona{
    //atributos
    public $nombre;
    public $apellido;


    //constructor
    public function __construct(){
        $this->nombre="Hola";
    }

    //metodos
    public function saludar($nombre){
        echo("<br>");
        echo "Hola como estas".$nombre;
    
    }   
}



?>