@extends('../layout.master')

@section('content')

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado de Tecnicos</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <button type="button" class="btn btn-default">
                        <a href="{{ action('MasterController@addTecnico') }}">
                            Agregar Técnico
                        </a>
                    </button>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Contacto</th>
                            <th>Correo</th>
                            <th>Editar</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

@stop
