<div class="container" style='padding-top:80px;'>
  <div class="form-header" ng-controller="insertctrl">
    <h3>Registro de Visitantes</h3>
<form id="visform">
  <div class="form-group row">
    <label for="inputid" class="col-sm-2 col-form-label">Identificacion:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputid" placeholder="Por favor ingrese Numero de Identificación..." ng-model="identificacion" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputnomape" class="col-sm-2 col-form-label">Nombre y Apellido:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputnomape" placeholder="Por favor ingrese nombre y apellido..."ng-model="nomape" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputnoapto" class="col-sm-2 col-form-label">¿A quien visita?</label>
    <div class="col-sm-10">
    <select class="custom-select" ng-controller="propselect" id="noapto" name="noapto" onchange="val()" >
      <option selected>Seleccione por favor</option>
      <option ng-repeat="p in propietarios" value="{{p.no_apto}}">{{p.nomape_propietario}}</option>
  </select>
  </div>
  </div>
   <div class="form-group row ">
    <div class="col-sm-2">Vehiculo</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="inputvehiculo" ng-model="vehiculo">
      </div>
    </div>
  </div>
  <input style="display:none;" id="hiddennoaptoid" name="hiddennoaptoid" value="" ng-model="noapto"/>
  <input style="display:none;" id="hiddennoaptoid" name="hiddennoaptoname" value="" />
  <div class="form-group row">
    <!-- modal de registro -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmvis">
      Registrar
    </button>
      <!-- Modal -->
      <div class="modal fade" id="confirmvis" tabindex="-1" role="dialog" aria-labelledby="confirmvislabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmvislabel">Confirmacion de Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reset()" >Cancelar</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="postDatavis();">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
</div>
</form>
</div>
</div>
<script type="text/javascript">

  function reset(){
    visita='';
    vehiculo='';
    document.getElementById("visform").reset();
    document.getElementById("inputvehiculo").reset();
    document.getElementById("noapto").reset();
  }
  function val() {
    d = document.getElementById("noapto").value;
    $('input[id=hiddennoaptoid]').val(d);
  }
  $('#confirmvis').on('shown.bs.modal', function (e) {
    var identificacion = $("#inputid").val(); 
    var nomape = $("#inputnomape").val(); 
    var visita = d;
    var vehiculo = $('#inputvehiculo').val();  
    $(".modal-body").html('<p>Identificación: '+identificacion+'</p>' +
        '<p>Nombre y Apellido: '+nomape+'</p>' +
        '<p>visita: '+visita+'</p>' + 
        '<p>vehiculo: '+vehiculo+'</p>');});
</script>