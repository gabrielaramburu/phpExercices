<?php
include '../modelo/Estudiante.php';

// directorio donde voy a dejar los archivos
$directorioSubida = "../archivosSubidos/"; 

//si se envia una archivo como parámetro
if(isset($_POST["foto"])){ 
  
    //$_FILES es una variable predefinida por php que contiene informacion del archivo subido
    //$_FILES es una Map, que dado una clave devuelve un valor, 
    //la clave es la palabra imagen y el valor es el nombre del archivo con su ruta
    if(!empty($_FILES["imagen"]["name"])) {
        
        $nombreArchivo = basename($_FILES["imagen"]["name"]); //basename retorna solo el nombre del archivo
        $rutaCompleta = $directorioSubida . $nombreArchivo; 

        //mueve la foto a la carpeta destino
        //tmp_name es el nombre temporal del archivo dado por el servidor
        if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaCompleta)){
            //carga exitosa, guardo estudiante
            guardarEstudiante($rutaCompleta);
            echo "<h3> Se grabo estudiante </h3>";
            echo  "<a href=\"controlador_listarConImagen.php\">Ver estudiantes</a>";
        } else {
            echo "<h2> Error al subir foto </h2>";
        }
    }
}

function guardarEstudiante($rutaCompleta) {
    $imagen = file_get_contents($rutaCompleta); 

    $date = new DateTimeImmutable();
    $id = $date->getTimestamp();

    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fechaNac"];
    $mail = $_POST["email"];

    $est = new Estudiante($id,
                $nombre,
                $apellido,
                $fecha,
                $mail,
                 $imagen);
    $est->guardarEstudiante();

}


?>