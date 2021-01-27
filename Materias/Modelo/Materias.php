<?php

require_once('../../Conexion.php');

class materias extends Conexion{
    
    public function __construct(){
        $this->db = parent:: __construct();
    }

    public function add($Materia){
        $statement = $this->db->prepare("INSERT INTO materias (Materia) VALUES (:Materia)");
        $statement->bindParam(':Materia', $Materia);

        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Add.php');
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias WHERE Id_Materia = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($Id, $Materia){
        $statement = $this->db->prepare("UPDATE materias SET Materia = :Materia WHERE Id_Materia = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Materia', $Materia);

        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Edit.php');
        }
    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM materias WHERE Id_Materia = :Id");
        $statement->bindParam(':Id', $Id);

        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Edit.php');
        }
    }


}
?>