@extends('../layout.master')

@section('content')

    <div class="row">
        <div class="">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista Inventario</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Stock</th>
                            <th>Costo</th>
                            <th>Modelo</th>
                            <th>Fabricante</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
