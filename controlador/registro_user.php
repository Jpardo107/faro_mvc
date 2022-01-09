<?php    
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $rut = $_POST["rut"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $ciudad = 0;
    $cdd = $_POST["opt"];
    $pais = $_POST["cosa"];

    if($pais == 1)
    {
        if($cdd ==1)
        {$cdd = 1;}
        else if($cdd == 2)
        {$cdd = 2;}
        else if($cdd == 3)
        {$cdd = 3;}
        else if($cdd == 4)
        {$cdd = 4;}
        else if($cdd == 5)
        {$cdd = 5;}
        else if($cdd == 6)
        {$cdd = 6;}
        else if($cdd == 7)
        {$cdd = 7;}
        else if($cdd == 8)
        {$cdd = 8;}
        else if($cdd == 9)
        {$cdd = 9;}
        else if($cdd == 10)
        {$cdd = 10;}
        else if($cdd == 11)
        {$cdd = 11;}
        else if($cdd == 12)
        {$cdd = 12;}
        else if($cdd == 13)
        {$cdd = 13;}
        else if($cdd == 14)
        {$cdd = 14;}
        else if($cdd == 15)
        {$cdd = 15;}
        else if($cdd == 16)
        {$cdd = 16;}
    }
    if($pais == 2)
    {
        if($cdd == 1)
        {$cdd = 17;}
        else if($cdd == 2)
        {$cdd = 18;}
        else if($cdd == 3)
        {$cdd = 19;}
        else if($cdd == 4)
        {$cdd = 20;}
    }
    if($pais == 3)
    {
        if($cdd == 1)
        {$cdd = 21;}
        else if($cdd == 2)
        {$cdd = 22;}
        else if($cdd == 3)
        {$cdd = 23;}
        else if($cdd == 4)
        {$cdd = 24;}
    }
    if($pais == 4)
    {
        if($cdd == 1)
        {$cdd = 25;}
        else if($cdd == 2)
        {$cdd = 26;}
        else if($cdd == 3)
        {$cdd = 27;}
        else if($cdd == 4)
        {$cdd = 28;}
    }
    require("../modelo/modelo.php");
    $usuario = new usuario($nombre1, $nombre2, $apellido1, $apellido2, $rut, $telefono, 
    $email, $pais,$cdd );
    $res = $usuario->ingUsuario();
    require("../vista/paginas/result_registro.php");    
?>