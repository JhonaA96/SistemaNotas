<?php
    require_once('../Modelo/Administrador.php');

    if ($_POST) {
        $ModeloAdministrador = new administrador();
        
        $Id = $_POST['Id'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Usuario = $_POST['Usuario'];
        $Contrasena = $_POST['Contraseña'];
        $Estado = $_POST['Estado'];
        $ModeloAdministrador->update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado);
        
    }else{
        header('Location: ../../Index.php');
    }

?>