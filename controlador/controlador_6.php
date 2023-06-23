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

$personas = array (
    new Estudiante(1, "pepe","pepe p", "01-01-2001", "pepe@gmail.com"),
    new Estudiante(2, "luis","luis f", "07-06-2005", "luis@gmail.com"));

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


for ($i = 0;$i < count($personas); $i++) {
    echo "<tr>";
    echo "<td>" . $personas[$i]->getId()  . "</td>";
    echo "<td>" . $personas[$i]->getNombre()  . "</td>";
    echo "<td>" . $personas[$i]->getApellido()  . "</td>";
    echo "<td>" . $personas[$i]->getFechaNac()  . "</td>";
    echo "<td>" . $personas[$i]->getMail()  . "</td>";
   

    echo "<td>  <a href=\"controlador_mant_estudiante_editar.php\">Editar</a>  </td>";
    echo "<td>  <a href=\"controlador_mant_estudiante_borrar.php?id=".$personas[$i]->getId()."\">Eliminar</a>  </td>";
    echo "<td> </td>";

    echo "</tr>";
    
}

echo "</table>";
?>

</body>
</html>