<?php
include '../servicios/conn.php';

$data = json_decode(file_get_contents("php://input"));

$identificacion = $data->identificacion;
$nomape = $data->nomape;
$visita = $data->visita;
$vehiculo = $data->vehiculo;
if ($vehiculo=true) {
	$vehiculo=1;
} else {
	$vehiculo=0;
}

$sql="INSERT INTO t_visitante (no_identificacion_vis, nomape_visitante,vehiculo,id_propietario) VALUES ('$identificacion', '$nomape','$vehiculo','$visita')";

$result=  mysqli_query($con,$sql);
        if($result){
          return 'Visitante creado exitosamente';     
        }else{
           return 'Error en BD.. contacte al administrador del sistema';     
        }

      return $result

?>