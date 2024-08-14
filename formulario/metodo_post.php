<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$rutGet= $_POST["rut"];
$nombreGet= $_POST["nombre"];
$apellidoGet= $_POST["apellido"];
$edadGet= $_POST["edad"];
$direccionGet= $_POST["direccion"];
$correoGet= $_POST["correo"];
$telefonoGet= $_POST["telefono"];




?>

<div class="container">
    <h2>
        <p>Su Rut es: <b><?php echo ($rutGet); ?></b></p>
        <p>Su Nombre es: <b><?php echo ($nombreGet); ?></b></p>
        <p>Su Apellido es: <b><?php echo ($apellidoGet); ?></b></p>

        <p>Su edad es: <b><?php echo ($edadGet); ?></b></p>
        <p>Su direccion es: <b><?php echo ($direccionGet); ?></b></p>
        <p>Su correo es: <b><?php echo ($direccionGet); ?></b></p>

        <p>Su Telefono es: <b><?php echo ($telefonoGet); ?></b></p>




        <p><input type="button" value="Volver" class="btn btn-success" onclick="location.href='formulario.php'"> </p>
</body>
</html>