<?php

    require_once('../Modelo/Usuarios.php');
    
    if($_POST){
        $Usuario = $_POST['Usuario'];
        $Contrasena = $_POST['Contrasena'];

        $Modelo = new Usuarios();
        
        if($Modelo->login($Usuario, $Contrasena)){
            header('Location: ../../Estudiantes/Paginas/Index.php');
        }
        else{
            header('Location: ../../Index.php');
        }

    }else{
        header('Location: ../../Index.php');
    }

?>