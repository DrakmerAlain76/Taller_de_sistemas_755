<!DOCTYPE html>
    <html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        
    <center><br>
    <br>

<?php
if(isset($_POST)){
	require_once 'conexion.php';
    if(!isset($_SESSION)){
		session_start();
    }
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conn, $_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conn, $_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, trim($_POST['email'])) : false;
        $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : false;
        /*insercion de nuevos campos*/ 
        $usuario = isset($_POST['usuario']) ? mysqli_real_escape_string($conn, $_POST['usuario']) : false;
        $cedula = isset($_POST['cedula']) ? mysqli_real_escape_string($conn, $_POST['cedula']) : false;
        $pais = isset($_POST['pais']) ? mysqli_real_escape_string($conn, $_POST['pais']) : false;
        $numero_cell = isset($_POST['numero_cell']) ? mysqli_real_escape_string($conn, $_POST['numero_cell']) : false;

        $errores = array();
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores['nombre'] = "El nombre no es válido";
        }
        
        // Validar apellidos
        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            $apellidos_validado = true;
        }else{
            $apellidos_validado = false;
            $errores['apellidos'] = "Los apellidos no son válido";
        }
        // Validar el email
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores['email'] = "El email no es válido";
        }
        // Validar la contraseña
        if(!empty($password)){
            $password_validado = true;
        }else{
            $password_validado = false;
            $errores['password'] = "La contraseña está vacía";
        }
        //Validar usuario
        if(!empty($usuario)){
            $usuario_validado = true;
        }else{
            $usuario_validado = false;
            $errores['usuario'] = "El campo usuario está vacía";
        }
        //Validar cedula
        if(!empty($cedula)){
            $cedula_validado = true;
        }else{
            $cedula_validado = false;
            $errores['cedula'] = "El campo cedula está vacía";
        }
        //Validar pais
        if(!empty($pais)){
            $pais_validado = true;
        }else{
            $pais_validado = false;
            $errores['pais'] = "El campo pais está vacía";
        }

        //Validar numero_cell
        if(!empty($numero_cell)){
            $numero_cell_validado = true;
        }else{
            $numero_cell_validado = false;
            $errores['numero_cell'] = "El campo numero_cell está vacía";
        }
        $guardar_usuario = false;
        if(count($errores) == 0){
            $guardar_usuario = true;
            // Cifrar la contraseña
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            //ACTUALIZAR
            $sql = "INSERT INTO usuarios VALUES(
                null, '$nombre', '$apellidos', '$usuario', '$password_segura', '$email', 2, '$cedula', '$pais', '$numero_cell', '', 0, 0);";
                
            $guardar = mysqli_query($conn, $sql);
            if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
            
	    }else{
            //////////////////////////
            ?>
    
            <?php
            //////////////////////////

        $_SESSION['errores'] = $errores;
        ?>
        <h1><strong> NO SE REGISTRO </strong></h1><br>
        <a class="boton" href="formulario.php">volver a registrarse</a><br><br>
        <a class="boton" href="index_.php">inicio</a>
        <?php
        //header('Location: formulario.php');
    }
    if(!$errores){
?>

    <h1><strong>SE REGISTRO CORRECTAMENTE</strong></h1>
    <?php
    /// HACER EL CONTROL DE VOLVER AL MENU DE INICIO
    require_once 'helper/control_par.php';
    if ($w) {
        // header('Location: panel_de_control.php');
        echo "<h1><strong>FELICIDADES</strong></h1><br>";
        // header('Location: adm/lista_usuarios.php');
        echo "<a class=\"boton\" href=\"adm/lista_usuarios.php\">volver</a><br>";
    }
    ?>
    <br><a class="boton" href="registrar.php">iniciar sesión</a><br><br>
    <a class="boton" href="index_.php">inicio</a>
    
    </center>
<?php
    }
}
?>
</body>
</html>