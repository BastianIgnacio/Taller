@extends('../layout.master')

@section('content')

        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                    <div class="count">179</div>
                    <h3>Servicios Activos</h3>
                    <p>Servicios activos hasta el momento</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="count">179</div>
                    <h3>En espera</h3>
                    <p>En espera de aprobación por cliente</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                    <div class="count">179</div>
                    <h3>En revisión</h3>
                    <p>Vehículos en revisión hasta el momento</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o"></i></div>
                    <div class="count">179</div>
                    <h3>Servicios finalizados</h3>
                    <p>Servicios finalizados semana en curso</p>
                </div>
            </div>
        </div>

        {{--    begin table --}}

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Historial de Servicios</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Estado</th>
                            <th>Fecha Creación</th>
                            <th>Vehículo</th>
                            <th>Cliente</th>
                            <th>Técnico Encargado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>69</td>
                            <td>En revisión</td>
                            <td>02/01/2019</td>
                            <td>Chevrolet Corsa</td>
                            <td>Juan Pérez</td>
                            <td>Mr. Anderson</td>
                            <td>
                                <button type="button" class="btn btn-danger"><a href="">Eliminar</a></button>
                                <button type="button" class="btn btn-primary"><a href="{{ action('MasterController@editarTareas') }}">Editar</a></button>
                            </td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>Activo</td>
                            <td>01/01/2019</td>
                            <td>Chevrolet Corvette</td>
                            <td>Juan Guzmán</td>
                            <td>Morpheus</td>
                            <td>
                                <button type="button" class="btn btn-danger"><a href="">Eliminar</a></button>
                                <button type="button" class="btn btn-primary"><a href="{{ action('MasterController@editarTareas') }}">Editar</a></button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {{--    end of table--}}

@stop
