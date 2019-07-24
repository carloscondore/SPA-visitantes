var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "/vistas/inicio.php"
  })
  .when("/reg_pro_form", {
    templateUrl : "/vistas/reg_pro_form.php"
  })
  .when("/reg_vis_form", {
    templateUrl : "/vistas/reg_vis_form.php"
  });
});

app.controller('propietarioCtrl', function ($scope, $location ,$http) {

 $http({
  method: 'get',
  url: '/servicios/getpro.php'
 }).then(function successCallback(response) {
  // obtiene los propietarios agrupados.. cosa que no tiene sentido porque si quiero editar un propietario que no esta en la lista no podre
  $scope.propietarios = response.data;
 });
$scope.listavisitas = function(apto){
	$http.get('/servicios/getvis.php?id_apto=' + apto).then(function successCallback (response) {
            $scope.vistantes = response.data;
            $scope.$apply();
           


	})
}
$scope.eliminarpro = function(apto){ 
	$http.get('/servicios/eli_pro.php?id_apto=' + apto).then(function (response) {
            $scope.eli_pro = response.data;
            alert($scope.eli_pro);
	})
}

$scope.actualizar = function(apto){
	 $('#confirmpro').modal('toggle');
}

});

app.controller('propselect', ['$scope', '$http', function ($scope, $http) {
 $http({
  method: 'get',
  url: '/servicios/select.php'
 }).then(function successCallback(response) {
  // obtiene todos los propietarios para el select .. asi no habra inconsistencia en cuanto a quien visita..
  $scope.propietarios = response.data;
 });
}]);

app.controller('insertctrl', function ($scope, $http) {
//post de propietarios
$scope.postDatapro = function () {
    $http.post("/servicios/ins_pro.php", {
                'identificacion': $scope.identificacion,
            	'nomape': $scope.nomape,
            	'noapto': $scope.noapto
            }).then(function(response){
                    console.log("Registro creado");
                },function(error){
                    alert("Error al crear propietario.");
                    console.error(error);

                });
    document.getElementById("proform").reset();
    $('#confirmpro').modal('toggle');
}

//post de vistantes
$scope.postDatavis = function () {
	var apto='';
	$apto = document.getElementsByName('noapto')[0].value;

    $http.post("/servicios/ins_vis.php", {
                'identificacion': $scope.identificacion,
            	'nomape': $scope.nomape,
            	'visita': $apto,
            	'vehiculo':$scope.vehiculo
            }).then(function(response){
                    console.log("Registro creado");
                },function(error){
                    alert("Error al crear propietario.");
                    console.error(error);

                });
    document.getElementById("visform").reset();
    $('#confirmvis').modal('toggle');
}

}); 