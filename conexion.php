<?php
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="INF755_basedd";
$conn=new mysqli("localhost","root","","INF755_basedd_t")or die("Conexión Fallida ".$conn->connect_error);
echo "<h1>Base de datos conectada sin novedad</h1>";

?>
