<?php
    include ("Conexion.php");
    class RepositorioEstudiante {
        private $pdo;
       

        public function  __construct()
        {
           
           $nuevaConexion = new Conexion();
           $this->pdo = $nuevaConexion->getConexion();
        
        }
        
        public function obtenerEstudiantes() {
            $estudiantes = [];
            $stmt = $this->pdo->query("SELECT id, nombre, apellido, fechaNac, email FROM estudiantes");
            while ($row = $stmt->fetch()) {
               
                array_push($estudiantes,new Estudiante(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido'],
                    $row['fechaNac'],
                    $row['email']));
            }
            return $estudiantes;
        }
      
    }

    
?>