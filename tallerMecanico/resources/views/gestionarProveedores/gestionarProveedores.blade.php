@extends('../layout.master')

@section('content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Listado de Proveedores</h2>        
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="text-muted font-13 m-b-30">
        </p>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Rut</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Contacto</th>
              <th>Producto</th>
              <th>Editar</th>
            </tr>
          </thead>



        </table>
      </div>
    </div>
  </div>
</div>
@stop