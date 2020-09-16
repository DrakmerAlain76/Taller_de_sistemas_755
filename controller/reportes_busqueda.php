<?php
require_once "../conexion.php";
require_once ('reporte/class.ezpdf.php');
require_once "../buscar.php";
//**//
$pdf = new Cezpdf('Carta');
//seleccionamos tipo de hoja
$pdf->selectFont('reporte/fonts/Helvetica.afm'); //seleccionamos fuente a utilizar

// NO HAY POR EL MOMENTO UNA IMAGEN
// $pdf->ezImage("emp.jpeg", 10, 150, 'none', 'left');
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),12);
$pdf->ezText("<b>Hora:</b> ".date("h:i:s"),12);
$pdf->ezText("<b>----Busqueda-----</b>\n",18);

// VARIABLES IMPORTAR RESULTADO DE LA BUSQUEDA

if(isset($_POST["imprimir"])&&isset($_POST["bus2"])&&isset($_POST["col2"]))
{
    $pdf->ezText("<b> Resuldados de la busqueda de: ".$_POST["bus2"]."</b>\n",12);
	$busca=$_POST["bus2"];//Texto a buscar
	$columna=$_POST["col2"]; //Opcion a Buscar
    $sql="SELECT * FROM usuarios WHERE $columna LIKE '%$busca%'";
    $result=$conn->query($sql);
    // $result=mysqli_query($conn,$sql);
    
//     var_dump($result);
// die();
}
else
{
    // $sql="SELECT * FROM usuarios";
    // $result=$conn->query($sql);
    // $pdf->ezText("<b> No existe resultados ".$_POST["bus2"]."</b>\n",12);
}

    if($result){
        // $d=$result->num_rows;
        
        if($result->num_rows>0){
            
            /*revisar no tiene datos en el array*/ 
            while ($row=mysqli_fetch_array($result)) {
                $data[]=array(
                'id_usuario'      =>$row[0],
                'nombres'         =>$row[1],
                'apellidos'       =>$row[2],
                'usuario'         =>$row[3],
                'email'           =>$row[6],
                'tipo'            =>$row[7],
                'cedula'          =>$row[8],
                'pais'            =>$row[9],
                'numero_cell'     =>$row[10],
                'genero'          =>$row[11],
                'tipo_pago'       =>$row[12]
            );
        }

            var_dump($data);
die();
    }
    else{
        // echo "Base de datos vacía";
        $pdf->ezText("<b> No existe resultados ".$_POST["bus2"]."</b>\n",12);
      

    }
}
else
{
    $pdf->ezText("<b> No existe resultados de la busqueda</b>\n",12);
}
$titles=array(
            'id_usuario'    =>'id_usuario',
            'nombres'       =>'nombres',
            'apellidos'     =>'apellidos',
            'usuario'       =>'usuario',
            'email'         =>'email',
            'tipo'          =>'tipo',
            'cedula'        =>'cedula',
            'pais'          =>'pais',
            'numero_cell'   =>'numero_cell',
            'tipo_pago'     =>'tipo_pago'
            );
//     var_dump($data);
// die();
$pdf->ezTable($data);
ob_end_clean();
$pdf->ezStream();
// var_dump($U);
// die();
$conn->close();
?>