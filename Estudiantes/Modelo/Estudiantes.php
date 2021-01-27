<?php

require_once('../../Conexion.php');

class estudiantes extends Conexion{
    
    public function __construct(){
        $this->db = parent:: __construct();
    }

    public function add($Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        $statement = $this->db->prepare("INSERT INTO estudiante (Nombre, Apellido, Documento, Correo, Materia, Docente, Promedio, Fecha_Registro) VALUES (:Nombre, :Apellido, :Documento, :Correo, :Materia, :Docente, :Promedio, :Fecha)");

        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Documento', $Documento);
        $statement->bindParam(':Correo', $Correo);
        $statement->bindParam(':Materia', $Materia);
        $statement->bindParam(':Docente', $Docente);
        $statement->bindParam(':Promedio', $Promedio);
        $statement->bindParam(':Fecha', $Fecha);

        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Add.php');
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM estudiante");
        $statement->execute();

        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM estudiante WHERE Id_Estudiante = :Id");

        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($Id, $Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha){
        $statement = $this->db->prepare("UPDATE estudiante SET Nombre = :Nombre, Apellido = :Apellido, Documento = :Documento, Correo = :Correo, Materia = :Materia, Docente = :Docente, Promedio = :Promedio, Fecha_Registro = :Fecha WHERE Id_Estudiante= :Id");

        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Documento', $Documento);
        $statement->bindParam(':Correo', $Correo);
        $statement->bindParam(':Materia', $Materia);
        $statement->bindParam(':Docente', $Docente);
        $statement->bindParam(':Promedio', $Promedio);
        $statement->bindParam(':Fecha', $Fecha);
        
        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Edit.php');
        }
    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM estudiante WHERE Id_Estudiante = :Id");
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