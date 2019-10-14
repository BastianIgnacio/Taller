@extends('../layout.master')

@section('content')
    <div class="row">
      <div class="">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Agregar Técnico</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="/gestionar-tecnicos/add-tecnico">
            @csrf
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre *<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nombre" name="primernombre" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido * <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="apellido" name="primerapellido" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">RUT *</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="rut"  name="rut" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" data-inputmask="'mask': '99.999.999'" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo *<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="correo" class="form-control" name="correo" data-parsley-trigger="change" required />
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Numero *<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
      
                  <input id="numero" name="numerocontacto" type="text" class="form-control" data-inputmask="'mask': '999-99999999'" required >
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancelar</button>
                  <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    
@stop
