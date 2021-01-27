<?php
    require_once('../Modelo/Materias.php');

    if ($_POST) {
        $Modelo = new materias();

        $Id = $_POST['Id'];
        $Materia = $_POST['Materia'];
        $Modelo->update($Id, $Materia);
    }
    else{
        header('Location: ../../Index.php');
    }
?>