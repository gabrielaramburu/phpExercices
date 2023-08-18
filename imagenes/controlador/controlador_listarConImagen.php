<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<body>

<h1>Tabla de Estudiantes</h1>


<?php
include '../modelo/Estudiante.php';


$estudiantes = Estudiante::obtenerEstudiantes();

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Fecha Nac</th>";
echo "<th>Mail</th>";
echo "<th>Imagen</th>";

echo "</tr>";


for ($i = 0;$i < count($estudiantes); $i++) {
    echo "<tr>";
    echo "<td>" . $estudiantes[$i]->getId()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getNombre()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getApellido()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getFechaNac()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getMail()  . "</td>";
    echo "<td>" .   
    '<img src = "data:image/png;base64,' . base64_encode($estudiantes[$i]->getImagen()) . '" width = "50px" height = "50px"/>'
    . '</td>';
  
   

    echo "</tr>";
    
}

echo "</table>";
?>

</body>
</html>