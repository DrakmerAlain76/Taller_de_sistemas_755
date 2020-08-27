<?php
require_once 'conexion.php';
    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
    }
    $sql_cursos="SELECT * FROM cursos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>RESERVAR</title>
</head>
<body>
    <?php
        //CONTROL DE REVERVA
        $consulta_de_reserva="SELECT * FROM reservaciones";
        $a=false;
        if($consulta0=mysqli_query($conn,$consulta_de_reserva)){
            while($persona=mysqli_fetch_assoc($consulta0)){
                    // echo $persona['usuario_res']."</br>";
                    if($usuario==$persona['usuario_res']){
                        $a=true;
                        echo "<h1>Usted ya tiene reservada una plaza</h1>";
                    break;
                    }
            }
        }
        //RESERVA
        if(!$a){
            $result=mysqli_query($conn,$sql_cursos);
            $row=$result->fetch_assoc();
            $cupos=(int)$row['cupos'];
            $numero_reserva=(int)$row['reservas'];//converte a entero
            $b=true;
            if ($numero_reserva<=$cupos) {//control de manera general de los tres cursos
                $numero_reserva++;
                // -- ESTA PARTE ES PROVICIONAL SE TIENE QUE AUTOMATIZAR LOS CURSOS DESDE LA ENTRADA
                $reservaciones = "INSERT INTO reservaciones VALUES(null, '$usuario', CURDATE(),CURRENT_TIME());";
                $reserva1="UPDATE `cursos` SET `reservas`=$numero_reserva WHERE id_curso=1"; 
                $reserva2="UPDATE `cursos` SET `reservas`=$numero_reserva WHERE id_curso=2";
                $reserva3="UPDATE `cursos` SET `reservas`=$numero_reserva WHERE id_curso=3";
                $consulta1 = mysqli_query($conn, $reservaciones);
                $consulta2 = mysqli_query($conn, $reserva1);
                $consulta3 = mysqli_query($conn, $reserva2);
                $consulta4 = mysqli_query($conn, $reserva3);
                $b=true;
            }
            else{
                $b=false;
                echo "<h1>espere a la proxima</h1>";
            }
            if($b){echo "<h1>FELICIDADES... usted reservo una plaza para su conferencia</h1>";}
        }
    ?>
    <br>
    <a href="index_.php">volver</a>
</body>
</html>