<div class="container" style='padding-top:80px;'>
	
<div ng-controller="propietarioCtrl" >  
 
    <table class="table table-bordered">  
        <tr>  
	        <th>No.</th>
	        <th>Apartamento</th>
	        <th>Propietario</th>
	        <th>Acciones</th>
        </tr>  
        <tr ng-repeat="p in propietarios" ng-if="propietarios.no_apto=!null">  
	        <td>{{$index+1}}</td>
	        <td>{{p.apto}}</td>
	        <td>{{p.nomape_propietario}}</td>
	        <td >
                 
                     <button type="button"  class="btn btn-danger" ng-click="eliminarpro(p.apto)">Eliminar</button> 
                  
                    <button  type="button" data-toggle="modal" data-target="#editarmodal"  class="btn btn-warning" ng-click="propietarioCtrl.editar(p.no_apto)">Editar</button> 
                  
                    <button type="button" data-toggle="modal" data-target="#listavisitas" ng-click="listavisitas(p.apto)" class="btn btn-info">Visitas</button>  
                </td>

        </tr>  
    </table>  
  </div>

<div class="modal fade" id="listavisitas" tabindex="-1" role="dialog" aria-labelledby="listavisitaslabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="listavisitaslabel">Visitas del Propietario {{p.nomape_propietario}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
					    <table class="table table-bordered">  
					        <tr>  
						        <th>No.</th>
						        <th>Apartamento</th>
						        <th>Propietario</th>
						        <th>Acciones</th>
					        </tr>  
					        <tr ng-repeat="v in visitantes" ng-if="visitantes.apto=!null">  
						        <td>{{$index+1}}</td>
						        <td>{{v.nomape_visitante}}</td>
						        <td>{{v.fec_hora}}</td>
						        <td >
					                    <button type="button"  class="btn btn-danger" >Eliminar</button> 
					                    <button  type="button" data-toggle="modal" data-target="#editarmodal"  class="btn btn-warning" >Editar</button>
					            </td>

					        </tr>  
					    </table>  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
              <button type="button" class="btn btn-primary" ng-click="">Aceptar</button>
            </div>
          </div>
        </div>
</div>
</div>