<?php
class conexion{
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $db_name = "notas";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct(){
        try {
            $db = new PDO("{$this->driver}:host={$this->host}; dbname={$this->db_name}", $this->usuario, $this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Se ha producido un error al tratar de conectarse con la base de datos" . $e->getMessage();
        }
    }
}

?>