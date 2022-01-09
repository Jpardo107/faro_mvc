<?php

require("../modelo/modelo.php");
$con = new consulta();
$usuarios = $con->consUsuario();
require("../vista/paginas/mostrar_usuarios.php"); 

?>