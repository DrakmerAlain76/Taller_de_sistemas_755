<?php 
require_once 'conexion.php';
// require_once 'helper/control_adm.php';
    $sql="SELECT * FROM cursos";
    // $sql="SELECT id_usuario,nombres,apellidos,usuario,email,tipo,cedula,pais,numero_cell,genero,Fech_Nac FROM usuarios";
    $listado=$conn->query($sql);
    //alternativa
    $listado_c=mysqli_query($conn,$sql)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    
<center>
        <form method="post" action="controller/crud_cursos/insertar.php"> 
            <h2>Nuevo Curso</h2>
            <input type="text" placeholder="nombre del curso" required name="nombre_curso"><br>
            <input type="text" placeholder="expositor" required name="expositor"><br>
            <textarea  required name="comentario">descripcion </textarea><br> 
            <input type="int" placeholder="costo" required name="costo"><br>
            <input type="int" placeholder="cupos" required name="cupos"><br>
            <input type="date" placeholder="fecha curso" required name="fecha_curso"><br>
            <!-- <input type="int" placeholder="reservas" required name="reservas"><br> -->
            <input type="submit" name="Registrar" value="Registrar">
            <input type="reset" name="Limpiar" value="Limpiar">
        </form>
        <input type="submit" name="Imprimir" value="Imprimir" onclick="location.href='controller/reportes_cursos.php'">
        <input type="submit" name="Buscar" value="Buscar" onclick="location.href='buscar.php'">

<table border="1">
<thead>
                <tr>
                    <th>ID</th>
                    <th>CURSOS</th>
                    <th>EXPOSITOR</th>
                    <!-- <th>COMENTARIO</th> opcional para hacer un cambio -->
                    <th>COSTO</th>
                    <th>CUPOS</th>
                    <th>FECHA</th>
                    <th>RESERVAS</th>
                    <th>ELIMINAR</th>
                    <th>MODIFICAR</th>
                </tr>
            </thead>
    <tbody>
        <?php
                if($listado->num_rows>0){
                    while ($row=$listado_c->fetch_assoc()){
                        ?>
                <tr>
                    <td><?php echo $row['id_curso'];?></td>
                    <td><?php echo $row['nombre_curso'];?></td>
                    <td><?php echo $row['expositor'];?></td>
                    <!-- <td><?php //echo $row['comentario'];?></td> -->
                    <td><?php echo $row['costo'];?></td>
                    <td><?php echo $row['cupos'];?></td>
                    <td><?php echo $row['fecha_curso'];?></td>
                    <td><?php echo $row['reservas'];?></td>
                    
                    <td><a href="controller/crud_cursos/modificar.php? id=<?php echo $row['id_curso'];?>">modificar</a></td>
                    <td><a href="controller/crud_cursos/eliminar.php? id=<?php echo $row['id_curso'];?>">eliminar</a></td>
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
            
        </body>
        </html>
        
        
        
