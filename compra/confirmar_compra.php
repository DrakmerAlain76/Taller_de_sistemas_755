<?php
require_once '../conexion.php';
    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
        $id_usuario=$t['id_usuario'];
    }

if(isset($_GET)){
    // $id_curso=$_GET['id_c'];

}
$id_curso=$_GET;
// var_dump($id_curso);
// die();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Confirmar Compra</title>
    <style>
        .ocultar1{
            display: none;
        }
    </style>
</head>
<body>
    <?php require_once ('../view/menu_navegacion_us.php'); ?>    

    <center>    
    <h1>Confirmar compra</h1>
    <h3>saldo su saldo es de: <?php //$saldo?> </h3>
    <!-- <form action="transaccion.php" method="get"> -->
        <form action="transaccion.php" method="get">
        <!-- <label for=""></label>
        <input type="" > -->
        <!-- SE TIENE QUE HACER EL CONTROL SI TIENE O NO TIENE CASH -->
        <?php 
           // if($saldo>=$costo_curso){?>
                
                <input class="conf-1" id="confirma" name="conf" type="checkbox" value="confirmar" required>
                <label for="conf">Confirmar si esta seguro de comprar</label><br>
                <input class="ocultar1" type="text" name="id_us" value="<?php echo $t['id_usuario']?>">
                <input class="ocultar1" type="text" name="id_cu" value="<?php echo $_GET['id_c']?>">
                <input class="ocultar" id="bt" type="submit"  value="si">
                <input class="ocultar" id="bt" type="reset"  value="no"><br>
                <a href="../index_.php"> Volver </a>
                
            <?php /*}
            echo "<h1>No tiene saldo</h1>";*/
        ?>
        
    </form>
    </center>


</body>
</html>
<?php

/* */


?>