<?php
    include ("Conexion.php");
    class RepositorioEstudiante {
        private $pdo;
        private $nuevaConexion;
       

        public function  __construct()
        {
           
           $nuevaConexion = new Conexion();
           $this->pdo = $nuevaConexion->getConexion();
        
        }
        
        public function obtenerEstudiantes() {
            $estudiantes = [];
            $stmt = $this->pdo->query("SELECT id, nombre, apellido, fechaNac, email, imagen FROM estudiantes");
            while ($row = $stmt->fetch()) {
               
                array_push($estudiantes,new Estudiante(
                    $row['id'],
                    $row['nombre'],
                    $row['apellido'],
                    $row['fechaNac'],
                    $row['email'],
                    $row['imagen']));
            }
            return $estudiantes;

            $pdo=null;
        }

        public function guardarEstudiantes($id, $nom, $ape, $fechaN, $email, $imagen) {
            $sql = "INSERT INTO estudiantes(id, nombre, apellido, fechaNac, email, imagen) " .
            " VALUES (?, ?, ?, ?, ?, ?)";

            $stmt= $this->pdo->prepare($sql);
            $stmt->execute([$id, $nom, $ape, $fechaN, $email, $imagen]);
        }
      
    }

    
?>