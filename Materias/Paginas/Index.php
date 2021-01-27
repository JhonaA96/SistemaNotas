<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesionAdministrador();

    $ModeloMaterias = new materias();

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

    <a href="Add.php" target="_blank"> Registrar Materia</a><br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php
            $Materias = $ModeloMaterias->get();
            if($Materias != null){
                foreach ($Materias as $Materia) {
                    
                
        ?>
        <tr>
            <td><?php echo $Materia['Id_Materia']?></td>
            <td><?php echo $Materia['Materia']?></td>
            <td>
                <a href="Edit.php?Id=<?php echo $Materia['Id_Materia']?>" target="_blank">Editar</a>
                <a href="Delete.php?Id=<?php echo $Materia['Id_Materia']?>"" target="_blank">Eliminar</a>
            </td>
        </tr>

        <?php
                }
            }
        ?>
    </table>

</body>
</html>