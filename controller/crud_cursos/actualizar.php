<?php
// require_once '../../helper/control_adm.php';
require_once '../../conexion.php';
if(isset($_POST)){
    // var_dump($_POST);
    // die();
    // if(isset($_SESSION)){}

        $nombre_curso = isset($_POST['nombre_curso']) ? mysqli_real_escape_string($conn, $_POST['nombre_curso']) : false;

        $expositor = isset($_POST['expositor']) ? mysqli_real_escape_string($conn, $_POST['expositor']) : false;

        $comentario = isset($_POST['comentario']) ? mysqli_real_escape_string($conn, $_POST['comentario']) : false;

        $costo = isset($_POST['costo']) ? mysqli_real_escape_string($conn, $_POST['costo']) : false;

        $cupos = isset($_POST['cupos']) ? mysqli_real_escape_string($conn, $_POST['cupos']) : false;

        $fecha_curso = isset($_POST['fecha_curso']) ? mysqli_real_escape_string($conn, $_POST['fecha_curso']) : false;
        // var_dump($fecha_curso);

    // die();
        $errores = array();

        if(!empty($nombre_curso) /*&& !is_numeric($nombre_curso) /*&& !preg_match("/[0-9]/", $nombre_curso)*/){
            $nombre_curso_validado = true;
        }else{
            $nombre_curso_validado = false;
            $errores['nombre_curso'] = "El nombre del curso no es válido";
        }
        
        if(!empty($expositor) && !is_numeric($expositor) && !preg_match("/[0-9]/", $expositor)){
            $apellidos_validado = true;
        }else{
            $expositor_validado = false;
            $errores['expositor'] = "El expositor no son válido";
        }
        
        if(!empty($comentario) /*&& !is_numeric($comentario) && !preg_match("/[0-9]/", $comentario)*/){
            $comentario_validado = true;
        }else{
            $expositor_validado = false;
            $errores['comentario'] = "El comentario no son válido";
        }
        //revisar esta parte
        if(!empty($costo)/*&& !is_numeric($costo)*/){
            $costo_validado = true;
        }else{
            $costo_validado = false;
            $errores['costo'] = "El costo está vacía";
        }
        
        if(!empty($cupos)/*&& !is_numeric($cupos)*/){
            $cupos_validado = true;
        }else{
            $cupos_validado = false;
            $errores['cupos'] = "El campo cupos está vacía";
        }
        
        if(!empty($fecha_curso)){
            $fecha_curso_V = true;
        }else{
            $fecha_curso_V = false;
            $errores['fecha_curso'] = "El campo fecha curso está vacía";
        }
        
        $guardar_curso = false;
        // REVISAR ESTA PARTE DE LA INSERCION //
        $id=$_REQUEST['id_curso'];
        // var_dump($id);
        // die();
        $consulta=true;
        if(count($errores) == 0){
            $guardar_curso = true;
            
            // $sql2="UPDATE cursos SET nombre_curso='$nombre_curso', expositor='$expositor', comentario='$comentario', costo=$costo, cupos=$cupos,/*fecha_curso=0, reservas=0 */WHERE id_curso=$id";
            $sql2="UPDATE cursos SET nombre_curso='$nombre_curso', expositor='$expositor', comentario='$comentario', costo=$costo, cupos=$cupos, fecha_curso='$fecha_curso' WHERE id_curso=$id";

            // var_dump($fecha_curso);
            // die();
            // $guardar = mysqli_query($conn, $sql2);
            $consulta = $conn->query($sql2);
            ///////////////////////////// revisar esta parte
             

            if($consulta==true){
                $_SESSION['completado'] = "El registro se ha completado con éxito";
            }else{
                $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
            }
            // var_dump($consulta);
            // var_dump($_SESSION['errores']['general']);
            // die();
	    }else{
        $_SESSION['errores'] = $errores;
        // var_dump($_SESSION['errores']);
        //     die();
        ?>
        <h1><strong> NO SE REGISTRO </strong></h1>
        <a href="../../adm/administrar_coferencias">volver a registrar curso</a><br><!--revisar si ingresa-->
        <?php
        //header('Location: formulario.php');
    }
    if(!$errores){
?>
    <h1><strong>SE ACTUALIZO CORREACTAMENTE</strong></h1>
    <?php
    /// HACER EL CONTROL DE VOLVER AL MENU DE INICIO
    // require_once 'helper/control_par.php';
    // if ($w) {
    //     header('Location: panel_de_control.php');
    // }
    ?>
    <a href="../../adm/administrar_coferencias"> VOLVER </a><br>
    
<?php
    }
    echo "<a href=\"../../index_.php\">inicio</a>";
}
?>