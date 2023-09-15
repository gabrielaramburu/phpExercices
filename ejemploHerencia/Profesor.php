<?php
include_once 'clases.php';

class Profesor extends Usuario{

    public function pasarLista($lista) {
        echo "Se procedrá a pasar la lista <br>";
        $count = count($lista);
        for ($i = 0; $i < $count; $i++) {
            echo $lista[$i] . " presente? <br>";
        }
    }
} 
?>