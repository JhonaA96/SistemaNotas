<?php
    require_once('../Modelo/Docentes.php');

    if ($_POST) {
        $ModeloDocentes = new docentes();

        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Usuario = $_POST['Usuario'];
        $Contrasena = $_POST['Password'];
        $ModeloDocentes->add($Nombre, $Apellido, $Usuario, $Contrasena);
        
    }else{
        header('Location: ../../Index.php');
    }

?>