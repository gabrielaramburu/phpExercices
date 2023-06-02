<?php
// Datos de ejemplo para simular la búsqueda
$datos = [
    "PHP",
    "JavaScript",
    "HTML",
    "CSS",
    "Python",
    "Java",
    "Ruby",
    "C#"
];

if (isset($_GET['nombre'])) {
    
    $consulta = filter_var($_GET['nombre'], FILTER_SANITIZE_STRING);

    // Mostrar la consulta de búsqueda
    echo "<h2>Resultados de búsqueda para: " . htmlspecialchars($consulta) . "</h2>";

    // Realizar la búsqueda en el array de datos y mostrar los resultados
    $resultados = array_filter($datos, function($item) use ($consulta) {
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