<?php

$conn=new mysqli("localhost","root","","inf755_basedd_t")or die("Conexión Fallida ".$conn->connect_error);

if(!isset($_SESSION)){
	session_start();
}
?>
