<?php
include 'Estudiante.php';

$ejemplo = $_GET["tipo"];

if ($ejemplo == 1) {
    $arr = array(1,2,3,4);
    echo json_encode($arr);
}

if ($ejemplo == 2) {
    $arr = array('nombre' => 'pepe', 'appellido' => 'gonzales', 'id' => 1);
    echo json_encode($arr);
}

if ($ejemplo == 3) {
    $est = new Estudiante(1,'luis','rodirguez','01/08/2000','luis@gmail.com');
    echo json_encode($est);
}


if ($ejemplo == 4) {
    //tengo que investigar como trabaja en js que realiza las gráficas
    //https://canvasjs.com/javascript-charts/chart-index-data-label/
    //en base a eso construyo el JSON que corresponda.
    //observese como los valores que representan las barras se obtienen el azartermi

    $datosGrafica  = array (
        'animationEnabled' => true,
        'exportEnabled' => true,
        'theme' => "light1",
        'data' => array(array(
            'type' => "column",
            'indexLabelFontColor' => "#5A5757",
            'indexLabelFontSize' => 16,
            'indexLabelPlacement' => "outside",
            'dataPoints' => array(
                array('x' => 10, 'y' => random_int(50,80)),
                array('x' => 20, 'y' => random_int(50,80)),
                array('x' => 30, 'y' => random_int(50,80)),
                array('x' => 40, 'y' => random_int(50,80))
            )
        )
    ));

    echo  json_encode($datosGrafica);
    
}


?>