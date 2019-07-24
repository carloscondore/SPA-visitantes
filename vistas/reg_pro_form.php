<div class="container" style='padding-top:80px;'>
  <div class="form-header" ng-controller="insertctrl">
    <h3>Registro de Propietarios</h3>
<form id="proform">
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
    <label for="inputnoapto" class="col-sm-2 col-form-label">No. Apartamento:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputnoapto" placeholder="Por favor ingrese Numero de Apartamento..." ng-model="noapto" required>
    </div>
  </div>
  <div class="form-group row">
    <!-- modal de registro -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmpro">
      Registrar
    </button>
      <!-- Modal -->
      <div class="modal fade" id="confirmpro" tabindex="-1" role="dialog" aria-labelledby="confirmprolabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="confirmprolabel">Confirmacion de Registro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reset();">Cancelar</button>
              <button type="button" class="btn btn-primary" ng-click="postDatapro();">Aceptar</button>
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
    document.getElementById("proform").reset();
  }
  $('#confirmpro').on('shown.bs.modal', function (e) {
    var identificacion = $("#inputid").val(); 
    var nomape = $("#inputnomape").val(); 
    var noapto = $("#inputnoapto").val();  
    $(".modal-body").html('<p>Identificación: '+identificacion+'</p>' +
        '<p>Nombre y Apellido: '+nomape+'</p>' +
        '<p>No. Apartamento: '+noapto+'</p>');});
</script>