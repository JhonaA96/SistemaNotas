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
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Registrar Administrador</h1>
    <form method="POST" action="../Controladores/Add.php">

        <label for="">Nombre</label><br>
        <input type="text" name="Nombre" required="On" autocomplete ="off" placeholder="Nombre"><br><br>

        <label for="">Apellido</label><br>
        <input type="text" name="Apellido" required="On" autocomplete ="off" placeholder="Apellido"><br><br>

        <label for="">Usuario</label><br>
        <input type="text" name="Usuario" required="On" autocomplete ="off" placeholder="Usuario"><br><br>

        <label for="">Contraseña</label><br>
        <input type="password" name="Password" required="On" autocomplete ="off" placeholder="Contraseña"><br><br>

        <input type="submit" value="Registrar Administrador">
    </form>
</body>
</html>