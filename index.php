
<!DOCTYPE html>
<html lang="es">
<head>
	  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro de Propietarios y Visitantes</title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" >
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>      
<script src="../js/angular.min.js"></script>
<script src="../js/angular-route.js"></script>

</head>
<body  ng-app="myApp">
	<h4>Registro de Propietarios y Visitantes <small>Elaborado por Carlos Condore</small></h4>

	<!--Crearemos el menú-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#!/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!reg_pro_form">Registro de propietarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!reg_vis_form">Registro de visitantes</a>
        </li>
      </ul>
    </div>
  </nav>
  <div ng-view></div>
      <script type="text/javascript" src="js/aplicacion.js"></script> 
</body>
</html>