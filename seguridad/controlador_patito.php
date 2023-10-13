<?php
$rutaImagen = __DIR__ . "/img/pato.jpg";
$informacionImagen = getimagesize($rutaImagen);
header("Content-type: {$informacionImagen['mime']}");
//lee la foto pero sin cargarla en momoria, sino que la envia directamente al browser
readfile($rutaImagen);
?>