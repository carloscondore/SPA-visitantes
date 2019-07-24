<?php
include '../servicios/conn.php';

$sel = mysqli_query($con,"select * from t_propietario group by apto");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("id"=>$row['id'],"apto"=>$row['apto'],"nomape_propietario"=>$row['nomape_propietario']);
}
echo json_encode($data);
?>