<?php
include_once 'clases.php';

class Adscripto extends Usuario{
    //estre atributo es particular del adscripto y se agrega a los atriburos heredados 
    private $turno;

    public function getTurno() {
        return $this->turno;
    }

    public function setTurno($turno){
        $this->turno = $turno;
    }

} 
?>