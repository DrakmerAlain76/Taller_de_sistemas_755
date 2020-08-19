<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Validar Usuario</title>
</head>
<body>
    <form method="POST" action="validar.php">
        <h2>Formulario de Login</h2>
        <input type="text" placeholder="&#128272;usuario" required name="usuario"><br>
        <input type="password" placeholder="&#128272;Contraseña" required name="pw"><br>
        <input type="submit"name="Validar" value="Validar"><br>
        <a href="formulario.php">Registrarse</a>
    </form>
    <a href="index_.php">inicio</a>
</body>
</html>