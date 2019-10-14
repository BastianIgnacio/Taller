@extends('../layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Gestion de permisos</h2>        
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="text-muted font-13 m-b-30">
        </p>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Empleado</th>
              <th>Gestion Servicios</th>
              <th>Gestion Inventario</th>
              <th>Gestion Funcionarios</th>
            </tr>
          </thead>



        </table>
      </div>
    </div>
  </div>
</div>   
@stop
