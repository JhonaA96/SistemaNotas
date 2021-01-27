<?php

require_once('Conexion.php');

class metodos extends Conexion{
    
    public function __construct(){
        $this->db = parent:: __construct();
    }

    public function getMateria(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getDocente(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE Perfil = 'Docente'");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
}
?>