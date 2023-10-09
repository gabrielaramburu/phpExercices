<?php
    class Estudiante {
        public $id;
        public $nombre;
        public $apellido;
        public $fechaNac;
        public $mail;

        public function  __construct($id, $nombre, $apellido, 
                $fechaNac, $mail)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNac = $fechaNac;
            $this->mail = $mail;
        }
        
        
    }
?>