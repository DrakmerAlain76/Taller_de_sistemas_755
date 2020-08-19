<?php

require_once 'conexion.php';

if(isset($_POST)){
	
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($conn, $sql);
	
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
        
		$verify = password_verify($password, $usuario['contrasena']);
        
        if($verify){
		
			$_SESSION['usuario'] = $usuario;
			header('Location: index_.php');
		}else{
            $_SESSION['error_login'] = "Login incorrecto!!";
            header('Location: registrar.php');
		}
	}else{
        $_SESSION['error_login'] = "Login incorrecto!!";
        header('Location: registrar.php');
	}
	
}

