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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Servicios Activos </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                        </ul>
                
            </div>
        </div>
        
    </div>

    

    
    {{--    end of table--}}
@stop
