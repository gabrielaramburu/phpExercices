<?php
// Datos de ejemplo para simular la búsqueda
$datos = [
    "Gabriel",
    "Maria",
    "Jose",
    "Carlos",
    "Juan",
    "Andrea"
];

if (isset($_GET['persona'])) {
    
    $consulta = $_GET['persona'];

    echo "<h2>Resultados de búsqueda para: " .
     htmlspecialchars($consulta) . "</h2>";

    $resultados = array_filter
        ($datos, function($item) use ($consulta) {
            return stripos($item, $consulta) !== false;
    });

    if (count($resultados) > 0) {
        echo "<ul>";
        foreach ($resultados as $resultado) {
            echo "<li>" . htmlspecialchars($resultado) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se encontraron resultados para su búsqueda.</p>";
    }
} else {
    echo "<p>Por favor, ingrese una consulta de búsqueda en el formulario.</p>";
}
?>