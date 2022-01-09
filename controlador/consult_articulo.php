<?php
$cant = $_POST["num"];
$cat = $_POST["categoria"];
require("../modelo/modelo.php");
$con = new consulta();
$tarea = $con->consArticulo($cant, $cat);
if ($cat == 1)
{
    require("../vista/paginas/noticias_nacional.php");
}
else if($cat == 2)
{
    require("../vista/paginas/noticias_internacional.php");
}
else if($cat == 3)
{
    require("../vista/paginas/noticias_deportes.php");
}
else if($cat == 4)
{
    require("../vista/paginas/noticias_economia.php");
}
?>