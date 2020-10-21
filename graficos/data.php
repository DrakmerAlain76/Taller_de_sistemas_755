<?php
// header('Content-Type: application/json');

// $conn = mysqli_connect("localhost","root","","inf755_graf");
// //base de datos solo de las tablas a usar
// $sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
// //consulta a la base de datos
// $result = mysqli_query($conn,$sqlQuery);
// // listado de las tablas
// //tres tablas (estudiante , nombre , nuimero o marcas)
// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// mysqli_close($conn);

// echo json_encode($data);
?>

<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","inf755_basedd_t");
//base de datos solo de las tablas a usar
$sqlQuery = "SELECT id_curso,nombre_curso,reservas FROM cursos ORDER BY id_curso";
//consulta a la base de datos
$result = mysqli_query($conn,$sqlQuery);
// listado de las tablas
//tres tablas (estudiante , nombre , nuimero o marcas)
$data = array();
foreach ($result as $row) {
	$data[] = $row;
	// var_dump($row);
}

mysqli_close($conn);

echo json_encode($data);
?>



