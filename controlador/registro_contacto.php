<?php
         $tipo_contacto = $_POST["tipo"];
         $nombre = $_POST["nombre"];
         $telefono = $_POST["telefono"];
         $email = $_POST["email"];
         $comentario = $_POST["coment"];
         $id = 0;
        require_once("../modelo/modelo.php");
        $contact = new contacto($id, $tipo_contacto, $nombre, 
        $telefono, $email, $comentario);
        $result = $contact->ingContacto();
        require("../vista/paginas/result_contacto.php");
?>