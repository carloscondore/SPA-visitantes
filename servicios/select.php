<?php
include '../servicios/conn.php';

$sel = mysqli_query($con,"select * from t_propietario");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("id"=>$row['id'],"no_apto"=>$row['id_propietario'],"nomape_propietario"=>$row['nomape_propietario']);
}
echo json_encode($data);
?>