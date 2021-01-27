<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../../Metodos.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesion();

    $ModeloMetodos = new metodos();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Registrar Estudiante</h1>
    <form method="POST" action="../Controladores/Add.php">
    
        <label for="">Nombre</label><br>
        <input type="text" name="Nombre" required="on" autocomplete="Off" placeholder="Nombre"> <br><br>

        <label for="">Apellido</label><br>
        <input type="text" name="Apellido" required="on" autocomplete="Off" placeholder="Apellido"> <br><br>

        <label for="">Documento</label><br>
        <input type="text" name="Documento" required="on" autocomplete="Off" placeholder="Documento"> <br><br>

        <label for="">Correo</label><br>
        <input type="email" name="Correo" required="on" autocomplete="Off" placeholder="Correo"> <br><br>

        <label for="">Materia</label><br>
        <select name="Materia" required="on">
            <option>Seleccione</option>
            <?php
                $Materias = $ModeloMetodos->getMateria();

                if ($Materias != null) {
                    foreach($Materias as $Materia){
            ?>
                        <option value="<?php echo $Materia['Materia'];?>"><?php echo $Materia['Materia'];?></option>
            <?php
                    }
                }
            ?>
        </select><br><br>

        <label for="">Docente</label><br>
        <select name="Docente" required="on">
            <option>Seleccione</option>
            <?php
                $Docentes = $ModeloMetodos->getDocente();

                if ($Docentes != null) {
                    foreach($Docentes as $Docente){
            ?>
                        <option><?php echo $Docente['Nombre'].' '.$Docente['Apellido'];?></option>
            <?php
                    }
                }
            ?>
        </select><br><br>

        <label for="">Promedio</label><br>
        <input type="number" name="Promedio" required="on" autocomplete="Off" placeholder="Promedio"> <br><br>

        <input type="submit" value="Registrar Estudiante">
    </form>
</body>
</html>