@extends('../layout.master')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado de Tecnicos</h2>
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
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tecnicos as $t)
                            <tr>
                                <td>{{$t->rut}}</td>
                                <td>{{$t->primernombre}}</td>
                                <td>{{$t->primerapellido}}</td>
                                <td>{{$t->numerocontacto}}</td>
                                <td>{{$t->correo}}</td>
                                <td>
                                    
                                    <button type="button" class="btn btn-warning">Editar</button>
                                    <form action="gestionar-tecnicos/eliminar-tecnico" method="POST">
                                    @csrf
                                        <button type="submit" name="rut" value="{{$t->rut}}" class="btn btn-danger" > Eliminar </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
