<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');

    $ModeloUsuarios = new usuarios();
    $ModeloUsuarios->validarSesion();
    
    $Modelo = New materias();

    $Id = $_GET['Id'];
    $InformacionMateria = $Modelo->getBYId($Id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notas</title>
</head>
<body>
    <h1>Editar Materia</h1>

    <form method="POST" action="../Controladores/Edit.php">
    <input type="hidden" name = "Id" value="<?php echo $Id ?>">

        <?php
            if($InformacionMateria != null){
                foreach ($InformacionMateria as $Info) {
                    # code...
                
        ?>

        <label for="">Nombre</label>
        <input type="text" name="Materia" required="on" autocomplete="off" placeholder="Nombre Materia" value = "<?php echo $Info['Materia']?>">

        <?php
                }
            }
        ?>
        <input type="submit" value="Editar Materia">
    </form>
</body>
</html>