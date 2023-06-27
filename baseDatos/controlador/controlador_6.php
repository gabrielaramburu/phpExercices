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
echo "<th>Accion 1</th>";
echo "<th>Accion 2</th>";
echo "</tr>";


for ($i = 0;$i < count($estudiantes); $i++) {
    echo "<tr>";
    echo "<td>" . $estudiantes[$i]->getId()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getNombre()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getApellido()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getFechaNac()  . "</td>";
    echo "<td>" . $estudiantes[$i]->getMail()  . "</td>";
   

    echo "<td>  <a href=\"controlador_mant_estudiante_editar.php\">Editar</a>  </td>";
    echo "<td>  <a href=\"controlador_mant_estudiante_borrar.php?id=".$estudiantes[$i]->getId()."\">Eliminar</a>  </td>";
    echo "<td> </td>";

    echo "</tr>";
    
}

echo "</table>";
?>

</body>
</html>