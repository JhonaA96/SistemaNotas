<?php
    require_once('../Modelo/Materias.php');

    if ($_POST) {
        $Modelo = new materias();

        $Materia = $_POST['Materia'];
        $Modelo->add($Materia);
    }
    else{
        header('Location: ../../Index.php');
    }
?>