<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Estudiantes.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesion();

    $ModeloEstudiante = new estudiantes();
    
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
    <a href="Add.php" target = "_blank">Registrar Estudiante</a><br><br>
    <table border = "1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>

        <?php
            $Estudiantes = $ModeloEstudiante->get();
            if($Estudiantes != null){
                foreach($Estudiantes as $Estudiante){
        ?>
                    <tr>
                        <td><?php echo $Estudiante['Id_Estudiante']?></td>
                        <td><?php echo $Estudiante['Nombre']?></td>
                        <td><?php echo $Estudiante['Apellido']?></td>
                        <td><?php echo $Estudiante['Documento']?></td>
                        <td><?php echo $Estudiante['Correo']?></td>
                        <td><?php echo $Estudiante['Materia']?></td>
                        <td><?php echo $Estudiante['Docente']?></td>
                        <td><?php echo $Estudiante['Promedio']?></td>
                        <td><?php echo $Estudiante['Fecha_Registro']?></td>
                        <td>
                            <a href="Edit.php?Id=<?php echo $Estudiante['Id_Estudiante']?>" target = "_blank">Editar</a>
                            <a href="Delete.php?Id=<?php echo $Estudiante['Id_Estudiante']?>" target = "_blank">Eliminar</a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>