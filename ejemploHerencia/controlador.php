<?php
include_once 'clases.php';

echo "<h1> Ejemplo herencia </h1>";

//observar que el constructor se hereda del padre
$profesor = new Profesor(1, 'prof1','1234','Jose','jose@gmail.com');

echo $profesor->saludar(); //este método tambien lo hereda del padre

//este método es particular del profesor
$profesor->pasarLista(array('Luis','Jose','Juliana'));


echo "<br>";

//otro ejemplo
$estudiante = new Estudiante(2, 'estud1','qwer','Laura','laura@gmail.com');

//observar como el saludo es distinto que el de profesor, 
//ya que el metodo está sobre escrito
echo $estudiante->saludar();

//este método se hereda del padre
echo $estudiante->mostrarCorreo();

//esta línea produce un error ya que Usuario es abstracto y no se puede instaciar
// Uncaught Error: Cannot instantiate abstract class Usuario 
$usr = new Usuario(4,'prueba','qwerasdf','Maria','maria@gmail.com');

?>