<?php

$c = $_POST["input_1"];
require("../modelo/modelo.php");
$con = new consulta();
$result = $con->consArticuloPrincipal();
require("../vista/paginas/index.php");

?>