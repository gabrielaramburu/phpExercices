<?php
include '../modelo/Estudiante.php';


$imagen = file_get_contents("https://i.imgur.com/VEIKbp0.png");
$date = new DateTimeImmutable();
$id = $date->getTimestamp();
$est = new Estudiante($id,'pepe','gonza','2000-12-12','garamburu@gmail.com', $imagen);
$est->guardarEstudiante();

?>