<?php
// require_once '../conexion.php';
$w=0;
if(isset($_SESSION['usuario'])){
        $t=$_SESSION['usuario'];
        $usuario=$t['usuario'];
        $tipo=$t['tipo'];
    if($tipo==1){
        $w=1;
    }
    elseif($tipo==2){
            $w=2;
    }else{
        $w=0;
    }
}
?>