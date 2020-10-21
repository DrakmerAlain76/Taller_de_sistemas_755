<?php
require_once '../helper/control_par.php';
require_once '../conexion.php';
if(isset($_SESSION['usuario'])){
    $t=$_SESSION['usuario'];
    $usuario=$t['usuario'];
    $id_usua=$t['id_usuario'];
}
$sql="SELECT * FROM reserva";
    $listado=$conn->query($sql);
$sql1="SELECT * FROM transaccion";
    $listado1=$conn->query($sql1);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <!-- <link rel="stylesheet" href=""> -->
    <title>LISTA DE CURSOS RESERVADOS</title>
</head>
<body>
    <!-- logo -->
    <!-- ESTE MENU ES PROVICIONAL -->
    <?php require_once ('../view/menu_navegacion_us.php'); ?>
    <center>

    
    <table border="1">
        <br>
        <br>
        <h1>RESERVAS DE CURSOS</h1>
            <thead>
                <tr>
                    <th>CURSOS</th>
                    <th>FECHA DE REVERVA</th>
                    <th>HORA DE RESERVA</th>
                    <th>COMPRADO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($listado->num_rows>0){
                    while ($row=$listado->fetch_assoc()){
                        //DEVERIA DE SER ID
                        $usuario_res=$row['usuario_res'];

                        if($usuario==$usuario_res){

                        
                        ?>
                <tr>
                    <td><?php echo $row['curso_res'];?></td>
                    <td><?php echo $row['fecha_res'];?></td>
                    <td><?php echo $row['horarios'];?></td>
                    <td><?php echo $row['comprado'];?></td>
                </tr>
                <?php
                    }
                    }
                }  
                else{
                    echo "No existen datos en la tabla";
                }
                // $conn->close();
                ?>
            </tbody>
        </table>
        </center>

        <center>

    
    <table border="1">
    <br>
        <br>
        <h1>COMPRAS DE CURSOS</h1>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DIA DE COMPRA</th>
                    <th>HORA DE COMPRA</th>
                    <th>COSTO</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($listado1->num_rows>0){
                    while ($row=$listado1->fetch_assoc()){
                        //DEVERIA DE SER ID
                        $usuario_id=$row['id_usuario'];

                        if( $id_usua==$usuario_id){

                        
                        ?>
                <tr>
                    <td><?php echo $row['nombre_curso'];?></td>
                    <td><?php echo $row['dia_compra'];?></td>
                    <td><?php echo $row['hora_compra'];?></td>
                    <td><?php echo $row['costo'];?></td>
                </tr>
                <?php
                    }
                    }
                }  
                else{
                    echo "No existen datos en la tabla";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        </center>
</body>
</html>

