
<?php

//importo las dependencias necesarias para usar el template engine
require dirname(dirname(__FILE__)) . '/vendor/autoload.php';
include '../modelo/Presupuesto.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//los templates o planillas los vamos a poner en la carpeta templates
$loader = new FilesystemLoader(dirname(dirname(__FILE__)) .'/templates');
$twig = new Environment($loader);

//Ejemplo 2
//=====================================
//remplazo la variable nombre del template por Jose
//remplazo la variable ocupacion por carpintero
echo $twig->render('ejemplotabla.html.twig', 
    array( 'presupuestos' => array(
        new Presupuesto(1,'mueble cocina',1000),
        new Presupuesto(2,'mueble baño',2000),
        new Presupuesto(3,'mueble dormitorio',3000)))    
);

    //como se observa el php ya no contiene código html


?>