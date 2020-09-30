<?php
    include("../conexion.php");
    include("jpgraph/src/jpgraph.php");
    include("jpgraph/src/jpgraph_pie.php");
    include("jpgraph/src/jpgraph_pie3d.php");
    $query=mysqli_query($conn,"SELECT cursos,reservas,ventas,reservas_pagadas from graficos");
    
    while($row=mysqli_fetch_array($query)){
        $data[]=$row[0];
        $can[]=$row[1];
        $can1[] = $row[2];
        $can2[] = $row[3];
        $can3[] = $row[4];
    }
    $graph=new PieGraph(550,300,"auto");
    $graph->img->SetAntiAliasing();
    $graph->title->Set("ESTADISTICAS DE CURSOS");
    $p1=new PiePlot3D($data);
    $p1->SetSize(0.45);
    $p1->SetCenter(0.4);
    $p1->value->SetFont(FF_FONT1,FS_BOLD);
    $p1->value->SetColor("black");
    $p1->SetLabelPos(0.5);
    $p1->SetLegends($can);
    $p1->SetLegends($can1);
    $p1->SetLegends($can2);
    $p1->SetLegends($can3);
    $p1->ExplodeAll();
    $graph->Add($p1);
    $graph->Stroke();
?>