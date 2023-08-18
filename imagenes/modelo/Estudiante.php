<?php
    include '../persistencia/RepositorioEstudiantes.php';
    class Estudiante {
        private $id;
        private $nombre;
        private $apellido;
        private $fechaNac;
        private $mail;
        private $imagen;

        public function  __construct($id, $nombre, $apellido, 
                $fechaNac, $mail, $imagen)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNac = $fechaNac;
            $this->mail = $mail;
            $this->imagen = $imagen;
        }
        
        public function getId() {
            return $this->id;
        }
        public function getNombre() {
            return $this->nombre;
        }

        public function getApellido() {
            return $this->apellido;
        }
        public function getMail() {
            return $this->mail;
        }
        public function getFechaNac() {
            return $this->fechaNac;
        }

        public function getImagen() {
            return $this->imagen;
        }


        public static function obtenerEstudiantes() {
            $repoEst = new RepositorioEstudiante();
            return $repoEst->obtenerEstudiantes(); 
        }

        public function guardarEstudiante() {
            $repoEst = new RepositorioEstudiante();
            $repoEst->guardarEstudiantes(
                $this->id,
                $this->nombre,
                $this->apellido,
                $this->fechaNac,
                $this->mail,
                $this->imagen);
        }
       
    }
?>