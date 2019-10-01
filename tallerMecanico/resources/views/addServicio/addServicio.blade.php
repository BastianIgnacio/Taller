@extends('../layout.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Formulario Servicio</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre-cliente">Nombre Cliente<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="nombrecliente" required="required" class="form-control col-md-7 col-xs-12">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client-type">Cliente nuevo<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="checkbox" id=cliente-nuevo checked data-toggle="toggle">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo-vehiculo">Modelo  Vehiculo <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="modeloVehiculo" name="modelo-vehiculo" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Año</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="año" class="form-control col-md-7 col-xs-12" type="text" name="año"required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Seleccione un Servicio<span class="required"></span>
                                </label>
                                <div class="btn-group">
                                    <button type="button" class="btn bootstrap-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tipos de Servicio
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Mantencion</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Cambio Aceite</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Revision</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Cambio componente</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Tecnicos<span class="required"></span>
                                    <button type="button" class="btn btn-primary">Agregar</button></label>

                                <label class="control-label col-mid-5 ">Insumo<span class="required"></span>
                                    <button type="button" class="btn btn-primary">Agregar</button></label>
                            </div>
                        </form>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancelar</button>
                            <button type="submit" class="btn btn-success">Ingresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
