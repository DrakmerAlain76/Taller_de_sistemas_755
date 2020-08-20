<?php
require_once 'conexion.php';

    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $nombre=$t['nombres'];
        $apellido=$t['apellidos'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio</title>
    <style>
        *{
            box-sizing: border-box;
        }
        section{
            display:inline-block;
            padding: 15px;
            width: 33%;
            
        }
        nav {
            /*display:inline-block;*/
            padding: 15px;
        }
        li{
            display:inline-block;
            
            
        }
        .lista{
            text-decoration: none;
            color: black;
            margin: 50px,50px !important;
            padding: 15px !important;
        }
        footer{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>CONFERECIAS </h1>
        <nav id="navegacion" class="cabecera">
            <ul>
                <li><a class="lista" href="">inicio</a></li>
                <li><a class="lista" href="">coferencias</a></li>
                <li><a class="lista" href="">novedades</a></li>
                <li><a class="lista" href="">acerca de nosotros</a></li>
                <li><a class="lista" href="">mi perfil</a></li>
                
                <?php
                    //if(!$t){
                        if(isset($_SESSION['usuario'])){
                            ?>
                        
                        <li>Bienvenid@<?php echo " ".$nombre." ".$apellido?></li>
                        <li><a class="lista" href="cerrar_session.php">cerrar seccion</a></li>
                <?php
                    }
                else{
                ?>
                    <li><a class="lista" href="formulario.php">formulario</a><br></li>
                    <li><a class="lista" href="registrar.php">iniciar seccion</a></li>
                <?php }?>
                
                
            
                
            </ul>
        </nav>
    </header>
    <br>
    <hr>
    <div id="contenido">

    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    <!-- <hr> -->
    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    <!-- <hr> -->
    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    </div>
    <hr class="limpiador">
    <article id="barra_lateral">
        <h4>mas...</h4>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam labore sint maxime ut eaque ab quam, cumque alias dolor autem suscipit tempora nobis explicabo porro officiis amet architecto quis!
        </p>
    
    </article>
    <footer id="pie_pagina">
        <hr>
        <label for="">pie de pagina</label>
    </footer>
</body>
</html>