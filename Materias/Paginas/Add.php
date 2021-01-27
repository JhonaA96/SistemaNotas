<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesion();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
</head>
<body>
    <h1>Registrar Materia</h1>

    <form method="POST" action="../Controladores/Add.php">
        <label for="">Nombre</label>
        <input type="text" name="Materia" required="on" autocomplete="off" placeholder="Nombre Materia">
        <input type="submit" value="Registrar Materia">
    </form>
</body>
</html>