<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesion();

    $Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de NOtas</title>
</head>
<body>
    <h1>Eliminar Materia</h1>

    <form method="POST" action="../Controladores/Delete.php">
    <input type="hidden" name="Id" value="<?php echo $Id; ?>">
    <P>¿Desea eliminar esta materia?</P>
    <input type="submit" value="Eliminar Materia">
    
    </form>
</body>
</html>