@extends('../layout.master')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Listado de Tareas Servicio #[id del servicio]</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Fecha Creación</th>
                        <th>Descripción</th>
                        <th>Técnico Asociado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>69</td>
                        <td>Cambiar balatas</td>
                        <td>02/01/2019</td>
                        <td> - </td>
                        <td>Mr. Anderson</td>
                        <td>
                            <button type="button" class="btn btn-danger"><a href="#">Eliminar</a></button>
                            <button type="button" class="btn btn-primary"><a href="{{ action('MasterController@editarInsumosTarea') }}">Editar Insumos</a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>68</td>
                        <td>Cambio piola</td>
                        <td>03/01/2019</td>
                        <td>Cambio piola freno de mano</td>
                        <td>Mr. Anderson</td>
                        <td>
                            <button type="button" class="btn btn-danger"><a href="#">Eliminar</a></button>
                            <button type="button" class="btn btn-primary"><a href="{{ action('MasterController@editarInsumosTarea') }}">Editar Insumos</a></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--    end of table--}}
@stop
