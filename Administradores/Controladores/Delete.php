<?php
    require_once('../Modelo/Administrador.php');

    if ($_POST) {
        $Modelo = New administrador();

        $Id = $_POST['Id'];
        $Modelo->delete($Id);
    }else{
        header('Location: ../../Index.php');
    }
    
?>