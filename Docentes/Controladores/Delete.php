<?php
    require_once('../Modelo/Docentes.php');

    if ($_POST) {
        $Modelo = New docentes();

        $Id = $_POST['Id'];
        $Modelo->delete($Id);
    }else{
        header('Location: ../../Index.php');
    }
    
?>