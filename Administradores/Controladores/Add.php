<?php
    require_once('../Modelo/Administrador.php');

    if ($_POST) {
        $ModeloAdministrador = new administrador();

        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Usuario = $_POST['Usuario'];
        $Contrasena = $_POST['Password'];
        $ModeloAdministrador->add($Nombre, $Apellido, $Usuario, $Contrasena);
        
    }else{
        header('Location: ../../Index.php');
    }

?>