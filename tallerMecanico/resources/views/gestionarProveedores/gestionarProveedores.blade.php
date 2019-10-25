@extends('../layout.master')

@section('content')

    {{--    begin table --}}

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Nónima Proveedores</h2>
                <div class="clearfix"></div>
            </div>
            <button type="button" class="btn btn-default">
                <a href="{{ action('MasterController@addProveedor') }}">
                    Agregar Proveedor
                </a>
            </button>
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Razón Social</th>
                        <th>Giro</th>
                        <th>Contacto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>69.669.669-9</td>
                        <td>Empresa X</td>
                        <td>Venta de balatas</td>
                        <td>5555riente</td>
                        <td>
                            
                            <button type="button" class="btn btn-warning fa fa-edit "><a href="{{ action('MasterController@editarProveedor') }}"></a></button>
                            <button type="button" class="btn btn-danger fa fa-remove "><a href=""></a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>69.669.669-9</td>
                        <td>Empresa Y</td>
                        <td>Venta de tubos de escape</td>
                        <td>5555riente</td>
                        <td>
                            <button type="button" class="btn btn-warning fa fa-edit "><a href="{{ action('MasterController@editarProveedor') }}"></a></button>
                            <button type="button" class="btn btn-danger fa fa-remove "><a href=""></a></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--    end of table--}}

@stop
