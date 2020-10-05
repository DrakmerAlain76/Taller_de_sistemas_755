<?php 
// require_once ('../conexion.php');
?>

<nav id="navegacion">
            <ul class="ul_nav">
                <li class="li_nav"><a class="lista" href="">inicio</a></li>
                <li class="li_nav"><a class="lista" href="">coferencias</a></li>
                <li class="li_nav"><a class="lista" href="">novedades</a></li>
                <li class="li_nav"><a class="lista" href="">acerca de nosotros</a></li>
                <?php if(isset($_SESSION['usuario'])){ 
                        $nombre=$_SESSION['usuario'];
                        // var_dump($nombre);
                    ?>
                    
                    <li class="li_nav"><a class="lista" href="">mi perfil</a></li>
                    <!-- hacer el cambio de genero en esta parte -->
                    <li class="li_nav"><a class="lista1" href="cerrar_session.php">cerrar seccion</a></li>
                    <li class="li_nav lista1" >Bienvenid@<?php echo " ".$nombre['nombres']." ".$nombre['apellidos']?></li>
                <?php
                    }
                    else{
                        echo " algo esta ";
                ?>
                <?php }?>
            </ul>
        </nav>