<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Administrador.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesionAdministrador();

    $ModeloAdministrador = new administrador();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>
        <a href="../../Administradores/Paginas/Index.php">Administradores</a>
        <a href="../../Docentes/Paginas/Index.php">Docentes</a>
        <a href="../../Materias/Paginas/Index.php">Materias</a>
        <a href="../../Estudiantes/Paginas/Index.php">Estudiantes</a>
        <a href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </h1>

    <a href="Add.php" target="_blank">Registrar Administrador</a><br><br>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Usuario</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

        <?php
            $Administradores = $ModeloAdministrador->get();
            if($Administradores != null){
                foreach ($Administradores as $Administrador) {
        ?>

            <tr>
                <td><?php echo $Administrador['Id_Usuario']?></td>
                <td><?php echo $Administrador['Nombre']?></td>
                <td><?php echo $Administrador['Apellido']?></td>
                <td><?php echo $Administrador['Usuario']?></td>
                <td><?php echo $Administrador['Perfil']?></td>
                <td><?php echo $Administrador['Estado']?></td>
                <td>
                    <a href="Edit.php?Id=<?php echo $Administrador['Id_Usuario']?>" target = "_blank">Editar</a>
                    <a href="Delete.php?Id=<?php echo $Administrador['Id_Usuario']?>" target = "_blank">Eliminar</a>
                </td>
            </tr>

        <?php
            }
                }
        ?>
    </table>
</body>
</html>