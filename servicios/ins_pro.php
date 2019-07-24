<?php
include '../servicios/conn.php';

$data = json_decode(file_get_contents("php://input"));

$identificacion = $data->identificacion;
$nomape = $data->nomape;
$noapto = $data->noapto;

$sql="INSERT INTO t_propietario (no_identificacion, nomape_propietario,apto) VALUES ('$identificacion', '$nomape','$noapto')";

$result=  mysqli_query($con,$sql);
        if($result){
          return 'Propietario creado exitosamente';     
        }else{
           return 'Error en BD.. contacte al administrador del sistema';     
        }

      return $result

?>