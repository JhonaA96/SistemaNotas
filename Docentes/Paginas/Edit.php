<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Docentes.php');
    require_once('../../Metodos.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->ValidarSesion();

    $Modelo = new docentes();

    $Id = $_GET['Id'];
    $InformacionDocente = $Modelo->getBYId($Id);

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
    <h1>Editar Docente</h1>
    <form method="POST" action="../Controladores/Edit.php">

        <input type="hidden" name="Id" value="<?php echo $Id; ?>">

        <?php
            if($InformacionDocente != null){
                foreach ($InformacionDocente as $Info) {
                    
        ?>

            <label for="">Nombre</label><br>
            <input type="text" name="Nombre" required="On" autocomplete ="off" placeholder="Nombre" value = "<?php echo $Info['Nombre']?>"><br><br>

            <label for="">Apellido</label><br>
            <input type="text" name="Apellido" required="On" autocomplete ="off" placeholder="Apellido" value = "<?php echo $Info['Apellido']?>"><br><br>

            <label for="">Usuario</label><br>
            <input type="text" name="Usuario" required="On" autocomplete ="off" placeholder="Usuario" value = "<?php echo $Info['Usuario']?>"><br><br>

            <label for="">Contraseña</label><br>
            <input type="password" name="Contraseña" required="On" autocomplete ="off" placeholder="Contraseña" value = "<?php echo $Info['Contraseña']?>"><br><br>
            
            <label for="">Estado</label>
            <select name="Estado" required="On">
                <option value = "<?php echo $Info['Estado']?>"><?php echo $Info['Estado']?></option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select><br><br>
        <?php
            }
                }
        ?>

        <input type="submit" value="Editar Docente">
    </form>
</body>
</html>