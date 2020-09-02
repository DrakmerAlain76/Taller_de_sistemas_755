<?php
require_once 'conexion.php';
require_once 'helper/control_adm.php';
    //$sql="SELECT * FROM usuarios";
    $sql="SELECT id_usuario,nombres,apellidos,usuario,email,tipo,cedula,pais,numero_cell,genero,Fech_Nac FROM usuarios";
    $listado=$conn->query($sql);
    //alternativa
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE USUARIOS</title>
    <style>
        *{
            font-family: Arial;
        }
    </style>
</head>
<body>
    <center>
        <form method="post" action="validar.php"> 
            <h2>Formulario de Registro</h2>
            <input type="text" placeholder="nombre" required name="nombre"><br>
            <input type="text" placeholder="apellidos" required name="apellidos"><br>
            <input type="email" placeholder="email" required name="email"><br>
            <input type="password" placeholder="Contraseña" required name="password"><br>
            <input type="text" placeholder="Usuario" required name="usuario"><br> 
            <input type="text" placeholder="Cedula" required name="cedula"><br>
            <input type="text" placeholder="pais" required name="pais"><br>
            <input type="text" placeholder="Numero de celular" required name="numero_cell"><br>
            <input type="submit" name="Registrar" value="Registrar">
            <input type="reset" name="Limpiar" value="Limpiar">
        </form>
        <input type="submit" name="Imprimir" value="Imprimir" onclick="location.href='controller/reportes.php'">
        <input type="submit" name="Buscar" value="Buscar" onclick="location.href='buscar.php'">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>USUARIO</th>
                    <th>EMAIL</th>
                    <th>TIPO</th>
                    <th>CEDULA</th>
                    <th>PAIS</th>
                    <th>TELEFONO</th>
                    <th>GENERO</th>
                    <th>FECHA DE NACIEMIENTO</th>
                    <th>ELIMINAR</th>
                    <th>MODIFICAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($listado->num_rows>0){
                    while ($row=$listado->fetch_assoc()){
                        ?>
                <tr>
                    <td><?php echo $row['id_usuario'];?></td>
                    <td><?php echo $row['nombres'];?></td>
                    <td><?php echo $row['apellidos'];?></td>
                    <td><?php echo $row['usuario'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['tipo'];?></td>
                    <td><?php echo $row['cedula'];?></td>
                    <td><?php echo $row['pais'];?></td>
                    <td><?php echo $row['numero_cell'];?></td>
                    <td><?php echo $row['genero'];?></td>
                    <td><?php echo $row['Fech_Nac'];?></td>
                    <td><a href="controller/modificar.php? id=<?php echo $row['id_usuario'];?>">modificar</a></td>
                    <td><a href="controller/eliminar.php? id=<?php echo $row['id_usuario'];?>">eliminar</a></td>
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
    </center>
</body>
</html>