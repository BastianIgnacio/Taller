@extends('../layout.master')

@section('addHead')
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<div class="" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_right">
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Nuevo Servicio</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Smart Wizard -->
                        <div id="wizard" class="form_wizard wizard_horizontal">
                        <label for="rut">Campos con (*) son obligatorios </label>
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                            Cliente<br />
                                            <small>Registrar datos cliente</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                            Vehiculo<br />
                                            <small>Registrar datos del vehiculo</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Tecnico<br />
                                            <small>Ingresar un tecnico en jefe</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                            Detalles<br />
                                            <small>Registrar informacion adicional</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            
                            <div id="step-1">
                                
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rut" >Rut *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="rut_cliente" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '99.999.999'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="nombre_cliente" name="primernombre" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido Paterno * <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="apellido_paterno_cliente" name="primerapellido" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido Materno * <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="apellido_materno_cliente" name="primerapellido" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="correo_cliente" class="form-control" name="correo" data-parsley-trigger="change" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="numero_contacto_cliente" name="numero_contacto_cliente" type="text" class="form-control" data-inputmask="'mask': '999-99999999'" required >
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-2">
                            
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo Vehiculo *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="tipo_vehiculo" class="form-control">
                                                <option>Auto</option>
                                                <option>Camioneta</option>
                                                <option>SUV </option>
                                                <option>Bus</option>
                                                <option>Moto</option>
                                                <option>Camion</option>
                                                <option>Maquinaria</option>
                                                <option>Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patente-auto">Patente *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="patente_vehiculo" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask' : '**-**-**'">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="marca_vehiculo" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo-auto">Modelo *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="modelo_vehiculo" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Año *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="ano_vehiculo" name="ano" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" data-inputmask="'mask' : '9999'">
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id="step-3">
                                <div class="x_content">
                                    <p class="text-muted font-13 m-b-30">
                                    <h2>Seleccionar Tecnico</h2>
                                    </p>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Rut</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Contacto</th>
                                                <th>Correo</th>
                                                <th>Seleccionar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <p id="tecnicos_radio">
                                        @foreach ($tecnicos as $t)
                                         <tr>
                                            <td>{{$t->rut}}</td>
                                            <td>{{$t->nombre}}</td>
                                            <td>{{$t->apellidopaterno}}</td>
                                            <td>{{$t->numerocontacto}}</td>
                                            <td>{{$t->correo}}</td>
                                            <td>
                                                <input type="radio" class="flat" name="gender" id="tecnicoResponsable" value='{{$t->rut}}' />
                                            </td>
                                        </tr>
                                        @endforeach
                                        </p>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="step-4">
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patente-auto">Tipo de Servicio <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="opcion" class="form-control">
                                                <option>Mantención</option>
                                                <option>Reparación</option>
                                                <option>Mantención y Reparación</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo-auto">Fecha *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="fecha_servicio" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion *<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="resizable_textarea form-control" name="des_area" id="des_area" placeholder="Descripción adicional"></textarea>
                                        </div>
                                    </div>

                                    



                                </form>
                            </div>

                        </div>
                        <!-- End SmartWizard Content -->




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection