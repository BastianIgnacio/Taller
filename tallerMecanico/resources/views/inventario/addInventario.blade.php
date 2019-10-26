@extends('../layout.master')


@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar al Inventario</h2>
            <div class="clearfix"></div>
        </div>
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        <div class="x_content">
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/agregarInsumo">
            @csrf

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="codigo" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="marca" class="form-control col-md-7 col-xs-12" required="required" type="text" name="middle-name">
                </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo<span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="modelo" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea class="resizable_textarea form-control" required="required" name="descripcion" placeholder="Descripción del insumo"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad Inicial<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="cantidad" required="required" data-inputmask="'mask': '9999'" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Cancelar</button>
                        <button type="submit" class="btn btn-success">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
