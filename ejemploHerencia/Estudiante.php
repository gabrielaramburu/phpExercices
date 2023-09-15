<?php
include_once 'clases.php';

class Estudiante extends Usuario{
    
    //si bien Estudiante hereda un método saludar, en este punto lo estamos sobreescribiendo
    //es decir, estamos implementando que haga otra acción diferente.
    public function saludar() {
        echo "Hola, mi nombre es " . $this->getNombre() . " y soy Estudiante. <br>";
    }
} 
?>