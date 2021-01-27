<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Docentes.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesionAdministrador();

    $ModeloDocente = new docentes();
    
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

    <a href="Add.php" target="_blank">Registrar Docente</a><br><br>

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
            $Docentes = $ModeloDocente->get();
            if($Docentes != null){
                foreach ($Docentes as $Docente) {
        ?>
            <tr>
                <td><?php echo $Docente['Id_Usuario']?></td>
                <td><?php echo $Docente['Nombre']?></td>
                <td><?php echo $Docente['Apellido']?></td>
                <td><?php echo $Docente['Usuario']?></td>
                <td><?php echo $Docente['Perfil']?></td>
                <td><?php echo $Docente['Estado']?></td>
                <td>
                    <a href="Edit.php?Id=<?php echo $Docente['Id_Usuario']?>" target = "_blank">Editar</a>
                    <a href="Delete.php?Id=<?php echo $Docente['Id_Usuario']?>" target = "_blank">Eliminar</a>
                </td>
            </tr>
        <?php
            }
                }
        ?>
    </table>
</body>
</html>