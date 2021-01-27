<?php

require_once('../../Conexion.php');

class administrador extends Conexion{

    public function __construct(){
        $this->db = parent:: __construct();
    }

    public function add($Nombre, $Apellido, $Usuario, $Contrasena){
        $statement = $this->db->prepare("INSERT INTO usuario (Nombre, Apellido, Usuario, Contraseña, Perfil, Estado) VALUES (:Nombre, :Apellido, :Usuario, :Contrasena, 'Administrador', 'Activo')");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Contrasena', $Contrasena);

        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Add.php');
        }
    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE Perfil = 'Administrador'");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuario WHERE Perfil = 'Administrador' AND Id_Usuario = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado){
        $statement = $this->db->prepare("UPDATE usuario SET Nombre = :Nombre, Apellido = :Apellido, Usuario = :Usuario, Contraseña = :Contrasena, Estado = :Estado WHERE Id_Usuario = :Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Contrasena', $Contrasena);
        $statement->bindParam(':Estado', $Estado);
        
        if ($statement->execute()) {
            header('Location: ../Paginas/Index.php');
        }
        else{
            header('Location: ../Paginas/Edit.php');
        }
    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM usuario WHERE Id_Usuario = :Id");
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
