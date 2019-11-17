@extends('../layout.master')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Inventario</h2>
                <div class="clearfix"></div>
            </div>
            @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

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
                        <form method="post" action="/agregarExistencias">
                        @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_content">
                                            <div class="col-md-12 col-xs-12">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Codigo</label>
                                                <div class="col-md-8 col-sm-9 col-xs-12">
                                                    <input type="text" id="codigo_existencia" name="codigo" required="required" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                                 <button type="button" id="botonInfo" class="btn btn-info">Info</button>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="nombre_existencia" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="marca_existencia" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_existencia" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stock Actual</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="stock_actual" required="required" disabled="disabled" value="90"class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad a agregar</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="cantidad_agregar" name="cantidad_agregar" required="required" data-inputmask="'mask': '9999'" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Agregar</button>
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
                                                    <select id="select_tecnico" class="form-control">
                                                    @foreach ($tecnicos as $tecnico)
                                                        <option>{{$tecnico->nombre.' '.$tecnico->apellidopaterno.' '.$tecnico->apellidomaterno.' | '.$tecnico->rut }}</option>
                                                    @endforeach
                                                    </select>
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Codigo</label>
                                                <div class="col-md-8 col-sm-9 col-xs-12">
                                                    <input type="text" id="codigo_extraer" required="required" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                                 <button type="button" id="botonInfoExtraer" class="btn btn-info">Info</button>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="nombre_extraer" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="marca_extraer" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" id="modelo_extraer" required="required" disabled="disabled" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Stock Actual</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="stockActual_extraer" required="required" disabled="disabled" value="90"class="form-control col-md-7 col-xs-12">
                                                 </div>
                                            </div>
                                            <br><br/>
                                            <div class="col-md-12 col-xs-12">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cantidad a Extraer</label>
                                                <div class="col-md-2 col-sm-9 col-xs-12">
                                                    <input type="text" id="cantidad_a_extraer"  required="required" data-inputmask="'mask': '9999'" class="form-control col-md-7 col-xs-12">
                                                 </div>
                                                 <button type="button" id="botonAgregarALista" class="btn btn-round btn-success">Agregar a lista</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">

                                    <h2>Lista de insumos a extraer </h2>
                                        <div class="x_content">
                                        <table id="tabla_extraer" class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th>CODIGO</th>
                                                <th>MARCA</th>
                                                <th>MODELO</th>
                                                <th>CANTIDAD A EXTRAER</th>
                                                <th>--</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="button" id="test" class="btn btn-primary">Extrar</button>
                            
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
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($insumos as $insumo)
                        <tr>
                            <td>{{$insumo->codigo}}</td>
                            <td>{{$insumo->marca}}</td>
                            <td>{{$insumo->modelo}}</td>
                            <td>{{$insumo->nombre}}</td>
                            <td>{{$insumo->cantidad}}</td>
                            <th>
                            
                            <button type="button" class="btn btn-info fa fa-edit" data-toggle="modal" data-target=".{{$insumo->codigo}}"> </button>
            <div class="modal fade {{$insumo->codigo}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Editar codigo {{$insumo->codigo}}</h4>
                        </div>
                        <div class="modal-body">
                        
                            
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </div>
            </div> 

                            </th>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script >

var ex;

$(document).on("click","#eliminar",function()
{
    var id = $(this).attr("data-id");
    console.log('eliminarndo ' + id);
    var idEliminar = parseInt(id);
    ex.eliminar(idEliminar);
    ex.update();
});

$(document).ready(function() {
    
    var canAdd = false;
    var codigoExtraer ='';
    ex = new Extraccion();
   
    $('#botonInfo').click(function()
    {
        var codigo = $('#codigo_existencia').val();
        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: 'insumo/'+codigo,
        success: function (data) {
            if(jQuery.isEmptyObject(data))
            {
                console.log("Error");
                $('#nombre_existencia').val("-No Existe-");
                $('#marca_existencia').val("-No Existe-");
                $('#modelo_existencia').val("-No Existe-");
                $('#stock_actual').val("-No Existe-");
            }
            else{
                var nombre = data['0'].nombre;
                var marca = data['0'].marca;
                var modelo = data['0'].modelo;
                var stock_actual = data['0'].cantidad;

                $('#nombre_existencia').val(nombre);
                $('#marca_existencia').val(marca);
                $('#modelo_existencia').val(modelo);
                $('#stock_actual').val(stock_actual);
            }
        },
        error: function() { 
        }
        });
    });

    $('#botonInfoExtraer').click(function()
    {   

        codigoExtraer = $('#codigo_extraer').val();

        if($('#codigo_extraer').val()==="")
        {
            new PNotify({
                                  title: 'Alerta',
                                  text: 'Codigo Vacio' ,
                                  hide: false,
                                  styling: 'bootstrap3'
                              });
                        $('#nombre_extraer').val('');
                        $('#marca_extraer').val('');
                        $('#modelo_extraer').val('');
                        $('#stockActual_extraer').val('');
                        $('#codigo_extraer').val('');
                        $('#cantidad_a_extraer').val('');
                        codigoExtraer='';
                        canAdd=false;
            return;
        }

        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: 'insumo/'+codigoExtraer,
        success: function (data) {
            if(jQuery.isEmptyObject(data))
            {
                console.log("Error");
                $('#nombre_extraer').val("-No Existe-");
                $('#marca_extraer').val("-No Existe-");
                $('#modelo_extraer').val("-No Existe-");
                $('#stockActual_extraer').val("-No Existe-");
                canAdd=false;
            }
            else{
                var nombre = data['0'].nombre;
                var marca = data['0'].marca;
                var modelo = data['0'].modelo;
                var stock_actual = data['0'].cantidad;

                $('#nombre_extraer').val(nombre);
                $('#marca_extraer').val(marca);
                $('#modelo_extraer').val(modelo);
                $('#stockActual_extraer').val(stock_actual);
                canAdd = true;
            }
        },
        error: function() { 
        }
        });
    });

    $('#botonAgregarALista').click(function()
    {
        //var codigo = $('#codigo_extraer').val();
        var cActual = parseInt($('#stockActual_extraer').val());
        var cExtraer = parseInt($('#cantidad_a_extraer').val());

        if(cExtraer===0)
        {
            new PNotify({
                                  title: 'Alerta',
                                  text: 'Cero' ,
                                  hide: false,
                                  styling: 'bootstrap3'
                              });
            return;

        }
        if(cActual<cExtraer)
        {
            new PNotify({
                                  title: 'Alerta',
                                  text: 'La cantidad a extraer debe ser igual o menor a ' + cActual ,
                                  hide: false,
                                  styling: 'bootstrap3'
                              });
            return;
        }

        if($('#cantidad_a_extraer').val()==="")
        {
            new PNotify({
                                  title: 'Alerta',
                                  text: 'Campo vacio ' ,
                                  hide: false,
                                  styling: 'bootstrap3'
                              });
            return;
        }

        if(canAdd)
        {
            console.log("----- Agregar -----");
            var nombre =  $('#nombre_extraer').val();
            var marca = $('#marca_extraer').val();
            var modelo =  $('#modelo_extraer').val();
            ex.agregar(codigoExtraer,cExtraer,marca,modelo,cActual);
            ex.update();

            canAdd=false;
        }
        else
        {
            console.log("No Agregar");
            new PNotify({
                                  title: 'Alerta' ,
                                  text: 'Insumo no selecionado o no existe',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });

        }
    });
    
    $('#test').click(function()
    {
        ex.imprimir();
        
    });
    $('#gg').click(function()
    {
        console.log('asd');
        
    });
});




class Extraccion
{
    constructor()
    {
       this.lista = [];
    }

    update()
    {
        // Eliminamos todo lo de la tabla
        $('#tabla_extraer tbody').empty();
        
        // Agregamos los elementos que estan en la lista
        for (var i = 0, len = this.lista.length; i < len; i++)
        {
            var codigoAPublicar = this.lista[i].getCodigo();
            var cantidadAPublicar = this.lista[i].getCantidad();
            var marcaAPublicar = this.lista[i].getMarca();
            var modeloAPublicar = this.lista[i].getModelo();

            console.log('cantidad  '+ cantidadAPublicar);

            var htmlTags = '<tr>'+
                    '<td>' + codigoAPublicar + '</td>'+
                    '<td>' + marcaAPublicar + '</td>'+
                    '<td>' + modeloAPublicar + '</td>'+
                    '<td>' + cantidadAPublicar + '</td>'+
                    '<td>' + '<input type="button" id="eliminar" data-id="' + codigoAPublicar + '" class="btn btn-danger" value="x" > ' + '</td>'+
                    '</tr>';
            $('#tabla_extraer').append(htmlTags);
        }  
    }

    contiene(codigoRevisar)
    {
        var codigoRevisar = parseInt(codigoRevisar);
        for (var i = 0, len = this.lista.length; i < len; i++)
        {
            if(this.lista[i].getCodigo()==codigoRevisar)
            {
                return true;
            }
        }   
        return false;
    }

    agregar(codigo,cantidad,marca,modelo,stockActual)
    {
        if(this.contiene(codigo))
        {
            this.lista.forEach(function(ins) 
            {
                if(ins.getCodigo()==codigo)
                {
                    //Estamos en el codigo a agregar
                    // Debemos verificar que no excede el stock del inventario
                    var ins_can = parseInt(ins.getCantidad()) + cantidad;
                    
                    if(stockActual< ins_can)
                    {
                        new PNotify({
                                  title: 'Alerta' ,
                                  text: 'La cantidad TOTAL a extraer debe ser igual o menor a ' + stockActual,
                                  hide: false,
                                  styling: 'bootstrap3'
                              });
                    }
                    else
                    {
                        ins.agregar(cantidad);
                        $('#nombre_extraer').val('');
                        $('#marca_extraer').val('');
                        $('#modelo_extraer').val('');
                        $('#stockActual_extraer').val('');
                        $('#codigo_extraer').val('');
                        $('#cantidad_a_extraer').val('');
                    }
                }
            });
        }
        else
        {
            var insumo = new ExtraccionInsumo(codigo,cantidad,marca,modelo);
            this.lista.push(insumo);
            $('#nombre_extraer').val('');
            $('#marca_extraer').val('');
            $('#modelo_extraer').val('');
            $('#stockActual_extraer').val('');
            $('#codigo_extraer').val('');
            $('#cantidad_a_extraer').val('');
        }
    }

    getCantidadDeUnInsumo(code)
    {
        var codigo = parseInt(code);
        this.lista.forEach(function(ins) 
        {
            if(ins.getCodigo()==codigo)
            {
                var f = ins.getCantidad();
                return f;
            }
        });
    }

    eliminar(codigoEliminar)
    {
        var objeto;
        for (var i = 0, len = this.lista.length; i < len; i++)
        {
            if(this.lista[i].getCodigo()==codigoEliminar)
            {
                objeto = this.lista[i];
            }
        }   

        this.lista.splice(objeto,1);
    }

    imprimir()
    {
        this.lista.forEach(function(ins) 
        {
            console.log(ins.getInsumo());
        });
    }

}

class ExtraccionInsumo
{
    constructor(codigo,cantidad,marca,modelo)
    {
        this.codigo = codigo;
        this.cantidad = cantidad;
        this.marca = marca;
        this.modelo = modelo;
    }

    getCodigo()
    {
        return this.codigo;
    }

    getMarca()
    {
        return this.marca;
    }

    getModelo()
    {
        return this.modelo;
    }

    getInsumo()
    {
        return this.codigo + ' ' + this.cantidad;
    }

    agregar(can_agregar)
    {
        this.cantidad = parseInt(this.cantidad) + parseInt(can_agregar);
    }

    getCantidad()
    {
        return this.cantidad;
    }

}



</script>
@stop


