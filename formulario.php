<?php
require_once 'helper/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Formulario</title>
        <style></style>
    </head>
    
<body>

    <center>    
    <form method="post" action="validar.php"> 
    
        <h2>Formulario de Registro</h2>
        <input type="text" placeholder="nombre" required name="nombre"><br>
        <input type="text" placeholder="apellidos" required name="apellidos"><br>
        <input type="email" placeholder="email" required name="email"><br>
        <input type="password" placeholder="Contraseña" required name="password"><br>
        <input type="text" placeholder="Usuario" required name="usuario"><br> 
        <input type="text" placeholder="Cedula" required name="cedula"><br>
        <input type="text" placeholder="pais" required name="pais"><br>
        <input type="text" placeholder="Numero de celular" required name="numero_cell"><br>
        <input type="submit" name="Registrar" value="Registrar">
    </form>
    <a href="index_.php">inicio</a>
    </center>
</body>
</html>