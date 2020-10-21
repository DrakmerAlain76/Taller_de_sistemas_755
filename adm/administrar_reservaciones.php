<?php
require_once '../conexion.php';
// require_once 'helper/control_adm.php';
$sql="SELECT * FROM reservaciones";
$listado=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: Arial;
        }
        body{
            background-color: #333333;
            color: #f5f5f5;
            
        }
        center{
            padding-top: 10%;
        }
    </style>
    <title>LISTA DE RESERVAS</title>
</head>
<body>
    <center>
    <table border="1">
        <h1>LISTA DE RESERVAS</h1><br>
        <a class="boton"  href="../graficos/index0.php">Gráfico barra</a>
        <a class="boton"  href="../graficos/index1.php">Gráfico torta</a><br>
        <br> 
            <thead>
                <tr>
                    <th>ID RESERVAS</th>
                    <th>USUARIO</th>
                    <th>CURSO</th>
                    <th>FECHA DE RESERVA</th>
                    <th>HORA DE RESERVA</th>
                    <!-- <th>CODIGO</th> -->
                    <th>MODIFICAR</th>
                    <th>ELIMINIAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($listado->num_rows>0){
                    while ($row=$listado->fetch_assoc()){
                        ?>
                <tr>
                    <td><?php echo $row['id_reserva'];?></td>
                    <td><?php echo $row['usuario_res'];?></td>
                    <td><?php echo $row['curso_reservado'];?></td>
                    <td><?php echo $row['fecha_res'];?></td>
                    <td><?php echo $row['hora_res'];?></td>
                    <!-- <td><?php //echo $row['codigo'];?></td> -->
                    <td><a href="/modificar.php? id=<?php echo $row['id_reserva'];?>"><img src="../img/ico/editar.ico" alt=""></a></td>
                    <td><a href="/eliminar.php? id=<?php echo $row['id_reserva'];?>"><img src="../img/ico/eliminar.ico" alt=""></a></td>
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
        </table><br>
        <input class="boton" type="submit" name="Imprimir" value="Imprimir" onclick="location.href='../controller/reportes_reservaciones.php'">
        
        <a class="boton"  href="../panel_de_control.php">volver</a><br>
    </center>

</body>
</html>