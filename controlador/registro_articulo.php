<?php
$categoria = $_POST["tipo"];
$periodista = $_POST["per"];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$multimedia = $_POST["recurso"];
$cuerpo = $_POST["cuerpo"];
$ruta_imagen = "-";
$ruta_video = "-";
$ruta_audio = "-";
$id = 0;
$rut_per = "";
$extension = explode(".", $multimedia);
if($extension[1] == "jpeg" or $extension[1] == "png" or $extension[1] == "jpg")
{
    $ruta_imagen = $multimedia;
}
else if($extension[1] == "mp4" or $extension[1] == "flv" or $extension[1] == "avi" 
or $extension[1] == "mkv" or $extension[1] == "mov")
{
    $ruta_video = $multimedia;
}
else if ($extension[1] == "wav" or $extension[1] == "mp3" or $extension[1] == "aac" 
or $extension[1] == "wma" or $extension[1] == "mpeg-4")
{
    $ruta_audio = $multimedia;
}
if($periodista == 1)
{
    $rut_per = 175119426;
}
else if ($periodista == 2)
{
    $rut_per = 135880604;
}
require("../modelo/modelo.php");
$art = new articulo($id, $rut_per, $titulo, $subtitulo, $cuerpo, $ruta_imagen, 
$ruta_audio, $ruta_video, $categoria );
$result = $art->ingArticulo();
require("../vista/paginas/result_articulo.php");
?>