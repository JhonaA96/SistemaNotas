<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method = "POST" action="Usuarios/Controladores/Login.php">

    <label for="">Usuario</label><br>
    <input type="text" name="Usuario" required="" autocomplete="On" placeholder="Usuaio"><br><br>

    <label for="">Contraseña</label><br>
    <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña"><br><br>

    <input type="submit" value="Iniciar">
    </form>
</body>
</html>