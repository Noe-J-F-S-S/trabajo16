<?php
    $rut=$_POST['rut'];
    $nombre= $_POST['nombre'];
    $apellidopa=$_POST['apellidopa'];
    $apellidoma=$_POST['apellidoma'];
    $sexo=$_POST['sexo'];
    $ciudad=$_POST['ciudad'];
    $documento=$_POST['curriculum'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>
    <h1>BIENVENIDO</h1>
    <p>Rut : <?php echo$rut ?> </p>
    <p> Nombre : <?php echo $nombre; ?> </p>
    <p> Apellido paterno : <?php echo $apellidopa; ?> </p>
    <p> apellido materno : <?php echo $apellidoma; ?> </p>
    <p> Sexo : <?php echo $sexo; ?> </p>
    <p> Ciudad de nacimiento : <?php echo $ciudad; ?> </p>
    <p> Curriculum : <?php echo $documento; ?> </p>
    
</body>
</html>

