@extends('../layout.master')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Inventario</h2>
                <div class="clearfix"></div>
            </div>
            <button type="button" class="btn btn-default">
                <a href="{{ action('MasterController@addExistencia') }}">
                    Agregar Existencia
                </a>
            </button>
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Fecha Recepción</th>
                        <th>Descripción</th>
                        <th>Modelo</th>
                        <th>Nro. Serie</th>
                        <th>Existencias</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>0987654321</td>
                        <td>Buje</td>
                        <td>Mitsuboshi</td>
                        <td>02/01/2019</td>
                        <td>Buje para porsche spyder</td>
                        <td>B-42</td>
                        <td>-</td>
                        <td>789</td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Balatas</td>
                        <td>Ferrari</td>
                        <td>02/01/2019</td>
                        <td>Balatas para Ferrari Enzo</td>
                        <td>F-69</td>
                        <td>-</td>
                        <td>123</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
