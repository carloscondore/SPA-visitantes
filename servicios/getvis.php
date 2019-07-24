<?php
include '../servicios/conn.php';

$id_apto=$_GET['id_apto'];
$sql="select a.*,b.nomape_propietario from t_visitante a join t_propietario b on a.id_propietario=b.id_propietario where a.no_apto='$id_apto'";
$sel = mysqli_query($con,$sql);
$data = array();
while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("id"=>$row['id_visitante'],"apto"=>$row['no_apto'],"nomape_visitante"=>$row['nomape_visitante'],"identificacion_vis"=>$row['no_identificacion_vis'],"vehiculo"=>$row['vehiculo'],"fec_hora"=>$row['fec_hor_visita']);
}
echo json_encode($data);
?>
