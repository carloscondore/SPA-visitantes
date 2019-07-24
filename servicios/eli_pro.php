<?php
include '../servicios/conn.php';

$id_apto=$_GET['id_apto'];
$sql="delete from t_propietario where apto='$id_apto'";
$sel = mysqli_query($con,$sql);
if ($sel) {
	$data='Registro eliminado'; 
} else {
	$data='Error al eliminar.. probablemente el propietario tiene visitas registradas';
}

echo json_encode($data);
?>