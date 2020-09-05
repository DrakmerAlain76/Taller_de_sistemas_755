<?php
require_once("../../conexion.php");
$id=$_REQUEST['id'];
echo "ID".$id;
$sql="SELECT * FROM cursos where id_curso='$id'";
$result=$conn->query($sql);
//alternativa
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
    <form method="post" action="actualizar.php">
        <table border="1">
            <tr>
                <td>Id</td>
                <td><input type="text" name="id_curso" value='<?php echo $row['id_curso'];?>'></td>
                <!-- <td><label value='<?php //echo $row['id'];?>'><label for=""></label></td> -->
            </tr>
            <tr>
                <td>Nombre curso</td>
                <td><input type="text" name="nombre_curso"value='<?php echo $row['nombre_curso'];?>'></td>
            </tr>
            <tr>
                <td>Expositor</td>
                <td><input type="text" name="expositor" value='<?php echo $row['expositor'];?>'></td>
            </tr>
            <tr>
                <!-- configurar el tamaño de la caja -->
                <td>Comentario</td>
                <td><textarea  required name="comentario"><?php echo $row['comentario'];?></textarea></td>
                <!-- <td><input type="text" name="comentario" value='<?php //echo $row['comentario'];?>'></td>tareatex -->
            </tr>
            <tr>
                <td>Costo</td>
                <td><input type="text" name="costo" value='<?php echo $row['costo'];?>'></td>
            </tr>
            <tr>
                <td>Cupos</td>
                <td><input type="text" name="cupos" value='<?php echo $row['cupos'];?>'></td>
            </tr>
            <tr>
                <td>fecha curso</td>
                <td><input type="text" name="fecha_curso" value='<?php echo $row['fecha_curso'];?>'></td>
            </tr>
        </table>
        <input type="submit" value="Modificar">
    </form>
<?php
}
?>
</body>
</html>
