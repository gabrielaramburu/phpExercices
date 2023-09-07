
<?php

//importo las dependencias necesarias para usar el template engine
require dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//los templates o planillas los vamos a poner en la carpeta templates
$loader = new FilesystemLoader(dirname(dirname(__FILE__)) .'/templates');
$twig = new Environment($loader);

//Ejemplo 1
//=====================================
//remplazo la variable nombre del template por Jose
//remplazo la variable ocupacion por carpintero
echo $twig->render('primerejemplo.html.twig', 
    ['nombre' => 'Jose', 'ocupacion' => 'carpintero']);

    //como se observa el php ya no contiene código html


?>