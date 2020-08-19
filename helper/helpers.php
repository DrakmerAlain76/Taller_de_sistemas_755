<?php
function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
        // $alerta = "<h1>error</h1>".$errores[$campo];//colocar una alerta de error
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}



?>