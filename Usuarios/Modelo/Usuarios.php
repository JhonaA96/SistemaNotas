<?php

require_once('../../Conexion.php');
session_start();

class usuarios extends Conexion{

    public function __construct(){
        $this->db = parent:: __construct();
    }

    public function login($Usuario, $Contrasena){

        $statement = $this->db->prepare("SELECT * FROM usuario WHERE Usuario =:Usuario AND Contraseña = :Contrasena");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Contrasena',$Contrasena);
        $statement->execute();

        if ($statement->rowCount() == 1) {
            $result = $statement->fetch();
            $_SESSION['Nombre'] = $result['Nombre'] . " " . $result['Apellido'];
            $_SESSION['Id'] = $result['Id_Usuario'];
            $_SESSION['Perfil'] = $result['Perfil'];
            return true;
        }
        return false;
    }

    public function getNombre(){
        return $_SESSION['Nombre'];
    }


    public function getId(){
        return $_SESSION['Id'];
    }

    
    public function getPerfil(){
        return $_SESSION['Perfil'];
    }

    public function validarSesion(){
        if ($_SESSION['Id'] == null) {
            header('Location: ../../Index.php');
        }
    }

    public function validarSesionAdministrador(){
        if ($_SESSION['Id'] != null) {
            if ($_SESSION['Perfil'] == 'Docente') {
                header('Location: ../../Estudiantes/Paginas/Index.php');
            }
        }
    }

    public function salir(){
        $_SESSION['Id'] = null;
        $_SESSION['Nombre'] = null;
        $_SESSION['Perfil'] = null;
        session_destroy();
        header('Location: ../../Index.php');
    }

}
?>
