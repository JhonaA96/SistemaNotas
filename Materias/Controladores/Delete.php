<?php
    require_once('../Modelo/Materias.php');

    if ($_POST) {
        $Modelo = New materias();

        $Id = $_POST['Id'];
        $Modelo->delete($Id);
    }else{
        header('Location: ../../Index.php');
    }
    
?>