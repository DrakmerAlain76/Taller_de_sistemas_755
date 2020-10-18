<?php
require_once '../conexion.php';
require_once '../helper/control_par.php';
if(isset($_SESSION['usuario'])){
    $t=$_SESSION['usuario'];
    $usuario=$t['usuario'];
}
$conf=$_GET['conf'];//confirmacion
$id_us=$_GET['id_us'];//id usuario
$id_cu=$_GET['id_cu'];//curso para comprar
//REVISAR QUE NO TENGA RESERVA

/* CONFIRMAR LA COMPRA RESTANDO EL SALDO*/
/* ESTO EN LA BASE DE DATOS*/
/* SALE UN MENSAJE DE CONFIRMACION*/



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>TRANFERENCIA</title>
</head>
<body>
<?php require_once ('../view/menu_navegacion_us.php'); ?>
    <center>
        <h1>USTED COMPRO EL CURSO .. </h1>
        <a href="../index_.php">volver</a>
    </center>
</body>
</html>




