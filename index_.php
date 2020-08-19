<?php
require_once 'conexion.php';

    if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $nombre=$t['nombres'];
        $apellido=$t['apellidos'];
        // $nombre=$usuario['nombres'];
        // $apellidos=$usuario['apellidos'];
        // $email=$usuario['email'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio</title>
</head>
<body>

    <nav id="navegacion" class="cabecera">
        <h1>PAGINA DE INICIO</h1>
        <ul>
            <li><a href="">inicio</a></li>
            <li><a href="">coferencias</a></li>
            <li><a href="">mi perfil</a></li>
            <li><a href="">acerca de nosotros</a></li>
            <li><a href="">mas</a></li>
            <li><a href="formulario.php">formulario</a><br></li>
            <li><a href="registrar.php">registrar</a></li>
        </ul>
        <?php
        if($t){
        ?>
            <p>Bienvenido<?php echo " ".$nombre." "./*;echo*/ $apellido?></p>
        <?php
            
        }
        ?>
    </nav>
    <br>
    <hr>
    <div id="contenido">

    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    <hr>
    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    <hr>
    <section>
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad fugit optio itaque ex adipisci, obcaecati provident illo quisquam exercitationem aspernatur? Eius sint minus nostrum suscipit culpa. Non aspernatur ipsa quidem?</p>
    </section>
    </div>
    <hr>
    <article id="barra_lateral">
        <h4>mas...</h4>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur numquam labore sint maxime ut eaque ab quam, cumque alias dolor autem suscipit tempora nobis explicabo porro officiis amet architecto quis!
        </p>
    
    </article>
    <hr>
    <footer id="pie_pagina">
        <label for="">pie de pagina</label>
    </footer>
</body>
</html>