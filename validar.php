<?php

// echo "<h1>validar</h1>";

if(isset($_POST)){
	require_once 'conexion.php';
    if(!isset($_SESSION)){
		session_start();
    }
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conn, $_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conn, $_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, trim($_POST['email'])) : false;
        $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : false;
        
        
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
        ///////////////////////////////////
        $guardar_usuario = false;
        
	    if(count($errores) == 0){
           
            $guardar_usuario = true;
            
            // Cifrar la contraseña
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            
            // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
            $sql = "INSERT INTO usuarios VALUES(
                null, '$nombre', '$apellidos', '', '$password_segura', '$email', 2, 0, 0, 0, 0, 0, 0);";
                
            $guardar = mysqli_query($conn, $sql);

            /////////////////////////////
            if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
            
	    }else{
		$_SESSION['errores'] = $errores;
	}



}
//header('Location: formulario.php');

?>


<h1><strong>NO SE REGISTRO CORREACTAMENTE</strong></h1>
<a href="formulario.php">volver a registrarse</a><br>
<a href="index_.php">inicio</a>





