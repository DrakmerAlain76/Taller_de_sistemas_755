<?php 
    require_once 'conexion.php';
    //CONTROL PARA EL INGRESO DE ADMINISTRADOR
    // if(isset($_SESSION['usuario'])){
    //     $t=$_SESSION['ususaio'];
    //     $usuario=$t['usuario'];
    //     $tipo=$t['tipo'];
    // }
    // if($tipo!=1)
    // {
    //     header('Location: index_.php');
    // }
    $sql="SELECT * FROM accesos";
    $listado=$conn->query($sql);
    //alternativa
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE ACCESOS</title>
    <style>
        *{
            font-family: Arial;
        }
    </style>
</head>
<body>
    <center>
        <h1>LISTA DE ACCESOS</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>USUARIO</th>
                    <th>FECHA DE ACCESO</th>
                    <th>HORA DE ACCESO</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($listado->num_rows>0){
                    while ($row=$listado->fetch_assoc()){
                        ?>
                <tr>
                    <td><?php echo $row['nuser'];?></td>
                    <td><?php echo $row['fecha_a'];?></td>
                    <td><?php echo $row['hora_a'];?></td>
                    <td><?php echo $row['tipo'];?></td>
                </tr>
                <?php
                    }
                }  
                else{
                    echo "No existen datos en la tabla";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="panel_de_control.php">volver</a>
        <input type="submit" name="Imprimir" value="Imprimir" onclick="location.href='controller/reportes_accesos.php'">
    </center>
</body>
</html>