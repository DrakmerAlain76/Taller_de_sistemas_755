<?php require_once '../helper/control_par.php';
require_once '../conexion.php';
if(isset($_SESSION['usuario'])){
    $t=$_SESSION['usuario'];
    $usuario=$t['usuario'];
    $id_usuario=$t['id_usuario'];
    // var_dump($id_usuario);
    // var_dump($usuario);
    // die();
}?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Perfil</title>
</head>
<body>
    <?php require_once ('../view/menu_navegacion_us.php'); 




// require_once("../conexion.php");
$id=$_REQUEST['id'];
// echo "ID".$id;
$sql="SELECT * FROM usuarios where id_usuario='$id'";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html><head>
    <title>

</title>
</head>
<body>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <br>
    <br>
    <br>
    <center>
    <form method="post" action="actualizar.php">
        <table border="1">
            <tr>
                <td>ID</td>
                <td><?php echo $row['id_usuario'];?></td>
            </tr>
            <tr>
                <td>Nombres</td>
                <td><input type="text" name="nombre"value='<?php echo $row['nombres'];?>'></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="apellidos" value='<?php echo $row['apellidos'];?>'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="Email" name="email" value='<?php echo $row['email'];?>'></td>
            </tr>
            <tr>
                <td>Usaurio</td>
                <td><input type="text" name="usuario" value='<?php echo $row['usuario'];?>'></td>
            </tr>
            <tr>
                <td>Cedula</td>
                <td><input type="text" name="cedula" value='<?php echo $row['cedula'];?>'></td>
            </tr>
            <tr>
                <td>Pais</td>
                <td><input type="text" name="pais" value='<?php echo $row['pais'];?>'></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type="text" name="numero_cell" value='<?php echo $row['numero_cell'];?>'></td>
            </tr>
            <!-- <tr>
                <td>Género</td>
                <td>
                    <select name="genero" value='<?php// echo $row['genero'];?>'>
                        <option>hombre</option>
                        <option>mujer</option>
                    </select>
                </td>
            </tr> -->
           
            
        </table>
        <input type="submit" value="Modificar">
    </form>
    <a href="../perfil/perfil.php">volver</a>
    </center>
<?php
}
?>
</body>
</html>
