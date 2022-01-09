<?php
    include("config.php");
class conexion
{
    private $h = host;
    private $u = username;
    private $p = password;
    private $d = dbname;
    public function conectar()
    {
        
        try
        {
            $pdo = new PDO('mysql:host='.$this->h.';dbname='.$this->d, $this->u, $this->p);
            return $pdo;
        }
        catch(PDOException $pe)
        {
            die("no se pudo conectar a la base de datos $this->d: ".$pe->getMessage());
        }
        finally
        {
            $pdo=null;
        }
    }
}
?>