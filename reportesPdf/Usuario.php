<?php
    class Usuario {
        private $nombre;
        private $apellido;
        private $dir;
        private $email;

        
        

        public function  __construct($nombre, $apellido, $dir, $email)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dir = $dir;
            $this->email = $email;
        }
        
        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function getDireccion() {
            return $this->dir;
        }

        public function getEmail() {
            return $this->email;
        }
    }
?>