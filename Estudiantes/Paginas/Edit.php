<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Estudiantes.php');
    require_once('../../Metodos.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->ValidarSesion();

    $Modelo = New estudiantes();

    $Id = $_GET['Id'];
    $InformacionEstudiante = $Modelo->getBYId($Id);

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
    <h1>Editar Estudiante</h1>
    <form method="POST" action="../Controladores/Edit.php">

        <input type="hidden" name="Id" value="<?php echo $Id; ?>">

        <?php 
            if($InformacionEstudiante != null){
                foreach($InformacionEstudiante as $Info){
        ?>

        <label for="">Nombre</label><br>
        <input type="text" name="Nombre" required="on" autocomplete="Off" placeholder="Nombre" value = "<?php echo $Info['Nombre']?>"> <br><br>

        <label for="">Apellido</label><br>
        <input type="text" name="Apellido" required="on" autocomplete="Off" placeholder="Apellido" value = "<?php echo $Info['Apellido']?>"> <br><br>

        <label for="">Documento</label><br>
        <input type="text" name="Documento" required="on" autocomplete="Off" placeholder="Documento" value = "<?php echo $Info['Documento']?>"> <br><br>

        <label for="">Correo</label><br>
        <input type="email" name="Correo" required="on" autocomplete="Off" placeholder="Correo" value = "<?php echo $Info['Correo']?>"> <br><br>

        <label for="">Materia</label><br>
        <select name="Materia" required="on">
            <option value = "<?php echo $Info['Materia']?>"><?php echo $Info['Materia']?></option>
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
            <option value = "<?php echo $Info['Docente']?>"><?php echo $Info['Docente']?></option>
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
        <input type="number" name="Promedio" required="on" autocomplete="Off" placeholder="Promedio" value = "<?php echo $Info['Promedio']?>"> <br><br>
        <?php
                     }
                }
        ?>
        <input type="submit" value="Editar Estudiante">
    </form>
</body>
</html>