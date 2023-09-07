<?php
    class Presupuesto {
        private $id;
        private $descripcion;
        private $importe;
       

        public function  __construct($id, $descripcion, $importe)
        {
            $this->id = $id;
            $this->descripcion = $descripcion;
            $this->importe = $importe;
        }
        
        public function getId() {
            return $this->id;
        }
        public function getDescripcion() {
            return $this->descripcion;
        }

        public function getImporte() {
            return $this->importe;
        }
        
    }
?>