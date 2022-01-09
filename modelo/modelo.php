<?php
class usuario
{
    public $Cnombre1;
    public $Cnombre2;
    public $Capellido1;
    public $Capellido2;
    public $Crut;
    public $Ctelefono;
    public $Cemail;
    public $Cpais;
    public $Cciudad;
    public $Cres;
    

    public function __construct($no1, $no2, 
    $ap1, $ap2, $ru, $tel, $em, $ps , $cd)
    {
        $this->Cnombre1 = $no1;
        $this->Cnombre2 = $no2;
        $this->Capellido1 = $ap1;
        $this->Capellido2 = $ap2;
        $this->Crut = $ru;
        $this->Ctelefono = $tel;
        $this->Cemail = $em;
        $this->Cpais = $ps;
        $this->Cciudad = $cd;
    }

    public function ingUsuario()
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("CALL sp_insertarUsuario (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindParam('1', $Crutz);
            $stmt->bindParam('2', $Cciudadz);
            $stmt->bindParam('3', $Cnombre1z);
            $stmt->bindParam('4', $Cnombre2z);
            $stmt->bindParam('5', $Capellido1z);
            $stmt->bindParam('6', $Capellido2z);
            $stmt->bindParam('7', $Ctelefonoz);
            $stmt->bindParam('8', $Cemaiz);

            $Crutz = $this->Crut;
            $Cciudadz = $this->Cciudad;
            $Cnombre1z = $this->Cnombre1;
            $Cnombre2z = $this->Cnombre2;
            $Capellido1z = $this->Capellido1;
            $Capellido2z = $this->Capellido2;
            $Ctelefonoz = $this->Ctelefono;
            $Cemaiz = $this->Cemail;

            $stmt->execute();
            $Cres = "Usuario ingresado correctamente";
            return $Cres;
            
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage();
        }
        finally
        {
            $cnn=null;
        }
    }
}

class contacto
{
    public $Ctipoc;
    public $Cnombrec;
    public $Ctelefonoc;
    public $Cemailc;
    public $Ccomentarioc;
    public $id;
    public $Cres4;

    public function __construct($idC, $ti, 
    $no, $te, $em, $co)
    {
        $this->id = $idC;
        $this->Ctipoc = $ti;
        $this->Cnombrec = $no;
        $this->Ctelefonoc = $te;
        $this->Cemailc = $em;
        $this->Ccomentarioc = $co;
    }
    
    public function ingContacto()
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("INSERT INTO comentario VALUES (?,?,?,?,?,?)");

            $stmt->bindParam('1', $idca);
            $stmt->bindParam('2', $Ctipoca);
            $stmt->bindParam('3', $Cnombreca);
            $stmt->bindParam('4', $Ctelefonoca);
            $stmt->bindParam('5', $Cemailca);
            $stmt->bindParam('6', $Ccomanetarioca);

            $idca = $this->id;
            $Ctipoca = $this->Ctipoc;
            $Cnombreca = $this->Cnombrec;
            $Ctelefonoca = $this->Ctelefonoc;
            $Cemailca = $this->Cemailc;
            $Ccomanetarioca = $this->Ccomentarioc;
            
            $stmt->execute();
           
            $Cres4 = "Comentario enviado exitosamente";
            return $Cres4;
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        finally
        {
            $cnn=null;
        }
    }
}

class consulta
{
    public function consUsuario()
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("CALL sp_mostrarUsuario");
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        finally
        {
            $cnn=null;
        }
        
    }
    public function consArticulo($nu, $ca)
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("SELECT * FROM articulo WHERE categoria = $ca ORDER BY ID_ARTICULO DESC LIMIT $nu");
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
            
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        finally
        {
            $cnn=null;
        }
    }
    public function consArticuloPrincipal()
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("SELECT TITULAR_ART IMAGEN_ART, AUDIO_ART, VIDEO_ART FROM articulo WHERE 
            categoria = 1 AND categoria = 2 AND categoria = 3 AND categoria = 4 ORDER BY ID_ARTICULO DESC LIMIT 1");
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
           
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        finally
        {
             $cnn=null;
        }
    }
}

class articulo
{
    public $Aid;
    public $Aru;
    public $Ati;
    public $Asb;
    public $Acp;
    public $Ari;
    public $Ara;
    public $Arv;
    public $Aca;
    public $Cres3;

    public function __construct($id, $ru, 
    $ti, $sb, $cp, $ri, $ra, $rv, $ca)
    {
        $this->Aid = $id;
        $this->Aru = $ru;
        $this->Ati = $ti;
        $this->Asb = $sb;
        $this->Acp = $cp;
        $this->Ari = $ri;
        $this->Ara = $ra;
        $this->Arv = $rv;
        $this->Aca = $ca;
    }

    public function ingArticulo()
    {
        try
        {
            require("conexion.php");
            $conect = new conexion();
            $cnn = $conect->conectar();
            $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $cnn->prepare("INSERT INTO articulo 
            VALUES (?,?,?,?,?,?,?,?,?)");

            $stmt->bindParam('1', $Aidq);
            $stmt->bindParam('2', $Aruq);
            $stmt->bindParam('3', $Atiq);
            $stmt->bindParam('4', $Asbq);
            $stmt->bindParam('5', $Acpq);
            $stmt->bindParam('6', $Ariq);
            $stmt->bindParam('7', $Araq);
            $stmt->bindParam('8', $Arvq);
            $stmt->bindParam('9', $Acaq);

            $Aidq = $this->Aid;
            $Aruq = $this->Aru;
            $Atiq = $this->Ati;
            $Asbq = $this->Asb;
            $Acpq = $this->Acp;
            $Ariq = $this->Ari;
            $Araq = $this->Ara;
            $Arvq = $this->Arv;
            $Acaq = $this->Aca;

            $stmt->execute();
            $Cres3 = "Articulo ingresado correctamente";
            return $Cres3;
            
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        finally
        {
            $cnn=null;
        }
    }
}
?>