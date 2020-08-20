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
    <?php //if(isset($_SESSION['completado'])): ?>
			<!-- <div class="alerta alerta-exito"> -->
				<?php//$_SESSION['completado']?>
			<!-- </div> -->
		<?php //elseif(isset($_SESSION['errores']['general'])): ?>
			<!-- <div class="alerta alerta-error"> -->
				<?php//$_SESSION['errores']['general']?>
			<!-- </div> -->
		<?php //endif; ?>
        <h2>Formulario de Registro</h2>
        <input type="text" placeholder="nombre" required name="nombre">
        <?php// echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?><br>
        <input type="text" placeholder="apellidos" required name="apellidos"><br>

        <?php //echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
        
        <input type="email" placeholder="email" required name="email"><br>
        
        <?php //echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        
        <input type="password" placeholder="Contraseña" required name="password"><br>
        
        <?php //echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'password') : ''; ?>
        
        
        <input type="text" placeholder="Usuario" required name="usuario"><br> 
        <input type="text" placeholder="Cedula" required name="cedula"><br>
        <input type="text" placeholder="pais" required name="pais"><br>
        <input type="text" placeholder="Numero de celular" required name="numero_cell"><br>
        


        <!-- <input type="password" placeholder="Confirmar Contraseña" required name="contrasena"><br>
        <input type="text" placeholder="edad" required name="edad"><br>
        <input type="text" placeholder="ciudad" required name="ciudad"><br> -->
        <!-- <input type="text" placeholder="edad" required name="edad"><br> -->
        <input type="submit" name="Registrar" value="Registrar">

        <?php borrarErrores(); ?>

    </form>
    
   
    <!-- <form method="post" action="registrar.php">
        <h2>Formulario de Registro</h2>
        <input type="text" placeholder="Nombres" required name="nombre"><br>
        <input type="text" placeholder="Apellidos" required name="apellido"><br>
        <input type="text" placeholder="Usuario" required name="usuario"><br>
        <input type="password" placeholder="Contraseña" required name="contrasena"><br>
        <input type="password" placeholder="Confirmar Contraseña" required name="contrasena"><br>
        <input type="text" placeholder="Email" required name="email"><br>
        <input type="text" placeholder="Numero de celular" required name="Nr_Cell"><br>
        <input type="text" placeholder="Cargo" required name="Cargo"><br>
        <input type="text" placeholder="tipo" required name="tipo"><br>
        <input type="radio" id="hombre" name="hombre" value="hombre">
        <label for="hombre">hombre</label><br>
        <input type="radio" id="mujer" name="mujer" value="mujer">
        <label for="mujer">mujer</label><br>
        <label for="plan">plan</label><br>
        <input type="checkbox" id="Basico" name="Basico" value="Basico">
        <label for="Basico"> Basico</label><br>
        <input type="checkbox" id="Intermedio" name="Intermedio" value="Intermedio">
        <label for="Intermedio"> Intermedio</label><br>
        <input type="checkbox" id="PREMIUN" name="PREMIUN" value="PREMIUN">
        <label for="PREMIUN">PREMIUN</label><br>
        <label for="T_pago">tipo de pago</label><br>
        <input type="radio" id="El_evento" name="El_evento" value="El_evento">
        <label for="El_evento">el dia del evento</label><br>
        <input type="radio" id="cuenta_bancaria" name="cuenta_bancaria" value="cuenta_bancaria">
        <label for="cuenta_bancaria">cuenta bancaria</label><br>
        <label for="birthday">Fecha de Nacimiento</label><br>
        <input type="date" id="F_Nac" name="F_Nac"><br><br>
        <input type="submit" name="Registrar" value="Registrar">
    </form> -->
    <a href="index_.php">inicio</a>
    </center>
</body>
</html>