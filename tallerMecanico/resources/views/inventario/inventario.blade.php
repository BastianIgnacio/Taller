@extends('../layout.master')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Inventario</h2>
                <div class="clearfix"></div>
            </div>

             <!-- Large modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal1">Agregar Existencia</button>
            <div class="modal fade modal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Existencia</h4>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="col-md-12 col-xs-12">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Codigo</label>
                                                <div class="col-md-8 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                                 <button type="button" class="btn btn-info">Info</button>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stock Actual</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" value="90"class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad a agregar</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto"  required="required" data-inputmask="'mask': '9999'" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Agregar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>  





            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Extraer Existencia</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Extraer Existencias</h4>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mecanico Responsable</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control">
                                                        <option>Choose option</option>
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                        <option>Option three</option>
                                                        <option>Option four</option>
                                                    </select>
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Codigo</label>
                                                <div class="col-md-8 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                                 <button type="button" class="btn btn-info">Info</button>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stock Actual</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto" required="required" disabled="disabled" value="90"class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad a agregar</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_auto"  required="required" data-inputmask="'mask': '9999'" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_content">
                                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Cantidad a extraer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Extrar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>  
            
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Existencias</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>0987654321</td>
                        <td>Buje</td>
                        <td>Mitsuboshi</td>
                        <td>B-42</td>
                        <td>789</td>
                    </tr>
                    <tr>
                        <td>1234567890</td>
                        <td>Balatas</td>
                        <td>Ferrari</td>
                        <td>F-69</td>
                        <td>123</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
