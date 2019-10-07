@extends('../layout.master')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-9">

                <div class="nav-md">
                    <div class="container body">
                        <div class="main_container">



                            <!-- page content -->
                            <div class="col-md-8" role="main">
                                <div class="">

                                    <div class="clearfix"></div>

                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Nuevo Servicio</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">


                                                    <!-- Smart Wizard -->
                                                    <div id="wizard" class="form_wizard wizard_horizontal">
                                                        <ul class="wizard_steps">
                                                            <li>
                                                                <a href="#step-1">
                                                                    <span class="step_no">1</span>
                                                                    <span class="step_descr">
                                              Ingresar cliente y vechiculo<br />
                                              <small>Ingrese los datos</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-2">
                                                                    <span class="step_no">2</span>
                                                                    <span class="step_descr">
                                              Agregar Tecnico<br />
                                              <small>Seleccione los tecnicos</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-3">
                                                                    <span class="step_no">3</span>
                                                                    <span class="step_descr">
                                              Agregar Insumos<br />
                                              <small>Selecione los insumos</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#step-4">
                                                                    <span class="step_no">4</span>
                                                                    <span class="step_descr">
                                              Planificar tareas<br />
                                              <small>Agrege las tareas</small>
                                          </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div id="step-1">
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
                                                                    <div class="btn-group col-md-3 col-sm-3 col-xs-12">
                                                                        <button type="button" class="btn bootstrap-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mostrar servicios</button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item " href="#">Mantencion</a>
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
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                <button class="btn btn-primary" type="button">Cancelar</button>
                                                                <button type="submit" class="btn btn-success">Ingresar</button>
                                                            </div>
                                                        </div>

                                                        </form>


                                                        <div id="step-2">
                                                            <h2 class="StepTitle">Step 2 Content</h2>
                                                            <p>
                                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                        <div id="step-3">
                                                            <h2 class="StepTitle">Step 3 Content</h2>
                                                            <p>
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>
                                                        <div id="step-4">
                                                            <h2 class="StepTitle">Step 4 Content</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <!-- End SmartWizard Content -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /page content -->

                        </div>
                    </div>

                </div>

@stop
