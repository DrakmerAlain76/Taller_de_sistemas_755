<?php
/*id usuario falta*/ 
require_once '../conexion.php';
require_once '../helper/control_par.php';

if(isset($_SESSION['usuario'])){
    $t=$_SESSION['usuario'];
    $id=$t['id_usuario'];

}


if(isset($_POST)){
    
        $codigo = isset($_POST['codigo']) ? mysqli_real_escape_string($conn, $_POST['codigo']) : false;
        
        $errores = array();

        if(!empty($codigo) && !is_numeric($codigo) && !preg_match("/[0-9]/", $codigo)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['expositor'] = "El codigo no son válido";
        }

        $guardar_codigo = false;
        /* SE TIENE QUE HACER UNA COMPARACION DE DEL CASH DE LOS QUE ESTA EN LA PLATAFORMA Y DEL USUARIO*/

        if(count($errores) == 0){
            $guardar_codigo = true;
            
            $sql="UPDATE usuarios SET cash='$codigo' WHERE id_usuario=$id";
            // $sql = "INSERT INTO cursos VALUES(
                // null, '$nombre_curso', '$expositor', '$comentario', $costo, $cupos, '$fecha_curso', 0);";
            

            $guardar = mysqli_query($conn, $sql);
            var_dump($guardar);
            die();
            if($guardar){
                $_SESSION['completado'] = "El codigo inserto con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar codigo!!";
            }

        }
        
}
?>
<h1>se cargo correctamente</h1>