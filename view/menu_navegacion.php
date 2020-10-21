<?php 
// require_once ('../conexion.php');
?>
<style>
    a{
        text-decoration: none;
    }
</style>
<nav id="navegacion">
            <ul class="ul_nav">
                <li class="li_nav"><a class="lista" href="index_.php">inicio</a></li>
                <li class="li_nav"><a class="lista" href="carrito/lista_con_usuario.php">coferencias</a></li>
                <li class="li_nav"><a class="lista" href="">novedades</a></li>
                <li class="li_nav"><a class="lista" href="">acerca de nosotros</a></li>
                <?php if(isset($_SESSION['usuario'])){ ?>
                    <?php if($tipo==1):  ?>
                    <li class="li_nav"><a class="lista" href="panel_de_control.php">panel de control</a></li>
                    <?php endif;
                    if($tipo==2):
                    ?>
                    <li class="li_nav"><a class="lista" href="perfil/perfil.php">mi perfil</a></li>
                    <?php endif; ?>
                    <!-- hacer el cambio de genero en esta parte -->
                    <li class="li_nav"><a class="lista1" href="cerrar_session.php">cerrar seccion</a></li>
                    <li class="li_nav lista1" >Bienvenid@<?php echo " ".$nombre." ".$apellido?></li>
                <?php
                    }
                else{
                ?>
                    <li class="li_nav"><a class="lista" href="formulario.php">formulario</a><br></li>
                    <li class="li_nav"><a class="lista" href="registrar.php">iniciar seccion</a></li>
                <?php }?>
            </ul>
        </nav>