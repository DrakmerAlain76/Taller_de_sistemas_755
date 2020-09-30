
<?php
include "../conexion.php";
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
$sql = "SELECT cursos,reservas,ventas,reservas_pagadas from graficos";
    $query=$conn->query($sql);
    while($row = $query->fetch_array())
    {
        $data[] = $row[0];
        $can[] = $row[1];
        $can1[] = $row[2];
        $can2[] = $row[3];
        $can3[] = $row[4];
    } 
$grafico = new Graph(500, 400, 'auto');
$grafico->SetScale("textlin");
$grafico->title->Set("Gráfica en Barras");
$grafico->xaxis->title->Set("ESTADISTICAS DE CURSOS");
$grafico->xaxis->SetTickLabels($can);
$grafico->xaxis->SetTickLabels($can1);
$grafico->xaxis->SetTickLabels($can2);
$grafico->xaxis->SetTickLabels($can3);

$grafico->yaxis->title->Set("Cantidad");

$barplot1 =new BarPlot($data);
$barplot1->SetWidth(30); // 30 pixeles de ancho para cada barra

$grafico->Add($barplot1);
$grafico->Stroke();

?>
