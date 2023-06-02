<?php
// Datos de ejemplo para simular la búsqueda
$personas = [
    "Gabriel",
    "Maria",
    "Jose",
    "Carlos",
    "Juan",
    "Andrea"
];

if (isset($_GET['persona'])) {
    
    $personaABuscar = $_GET['persona'];

    echo "<h2>Resultados de búsqueda para: " .
     htmlspecialchars($personaABuscar) . "</h2>";

    $encontrado = false; 
    foreach ($personas as $persona) {
        echo "<li>" . htmlspecialchars($persona) . "</li>";
        if (stripos($persona, $personaABuscar)) {
            echo "<ul>";
            echo "<li>" . htmlspecialchars($persona) . "</li>";
            echo "</ul>";
            $encontrado = TRUE;
        }
    }
    
    if ($encontrado != TRUE) {    
        echo "<p>No se encontraron resultados para su búsqueda.</p>";
    
    } 
} else {
    echo "<p>Por favor, ingrese una consulta de búsqueda en el formulario.</p>";
}
?>