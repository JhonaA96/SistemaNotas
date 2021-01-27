<?php
    require_once('../Modelo/Estudiantes.php');

    if ($_POST) {
        $Modelo = New estudiantes();

        $Id = $_POST['Id'];
        $Modelo->delete($Id);
    }else{
        header('Location: ../../Index.php');
    }
    
?>