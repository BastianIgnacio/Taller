@extends('../layout.master')

@section('content')

    <div class="row">
        <div class="">
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
                                    <div class="x_content">
                                    <form action="gestionar-tecnicos/eliminar-tecnico" method="POST">
                                    @csrf
                                        <button type="submit" name="rut" value="{{$t->rut}}" class="btn btn-danger" > X </button>
                                        <button type="button" class="btn btn-warning">Editar</button>
                                    </form>
                                   
                                    </div>
                                    
                                    
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

@stop
