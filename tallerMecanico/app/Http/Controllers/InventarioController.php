<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Redirect;

class InventarioController extends Controller
{
    //

    public function index()
    {
        
        $insumos = \DB::table('insumo')->select('codigo','marca','modelo','nombre','descripcion','cantidad')->get();
        return view('inventario.inventario')->with('insumos', $insumos);


    }
    public function agregarInsumo(Request $request)
    {

        //Creacion de mensajes de error y Validacion 
        $messages = [
            'cantidad.max'    => 'La cantidad es superior a 9999',
            'cantidad.numeric' => 'La cantidad debe ser un numero, ej: 20 debe ser escrito 0020',
            'descripcion.required' => ' La descripcion del insumo es obligatorio',
        ];

        $validator = Validator::make($request->all(), 
        [
            'codigo' => 'required|max:50',
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'cantidad' => 'numeric|min:1|max:9999',
            'descripcion' => 'required'
        ], $messages
        );

        if ($validator->fails()) {
            return redirect('/gestionar-inventario/add-inventario')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Validado, ahora queda trabajar con los datos ya seguros.

        $codigo = $request->input("codigo");
        $nombre = $request->input("nombre");
        $marca = $request->input("marca");
        $modelo = $request->input("modelo");
        $cantidad = $request->input("cantidad");
        $descripcion = $request->input("descripcion");
        //return $request;

        try { 
        //Your code
            \DB::table('insumo')->insert(
            ['codigo' => $codigo, 
            'nombre' => $nombre,
            'marca' => $marca ,
            'modelo' => $modelo ,
            'cantidad' =>  $cantidad,
            'descripcion' => $descripcion,
            ]);

        } catch(QueryException $ex){ 
            return redirect('/gestionar-inventario/add-inventario')->withErrors(['Problema al ingresar']);
        }

        return redirect('/gestionar-inventario/add-inventario')->with('message', 'Insumo ingresado con exito!');


    }

    public function agregarExistencias(Request $request)
    {
        //Creacion de mensajes de error y Validacion 
        $messages = [
            'cantidad.max'    => 'La cantidad es superior a 9999',
            'cantidad.numeric' => 'La cantidad debe ser un numero, ej: 20 debe ser escrito 0020',
        ];

        $validator = Validator::make($request->all(), 
        [
            'codigo' => 'required|max:50',
            'cantidad' => 'numeric|min:1|max:9999'
        ], $messages
        );

        if ($validator->fails()) {

            return redirect('/inventario')->withErrors(['Problema al Agregar Existencias']);

        }

        $codigo = $request->input("codigo");
        $insumo= \DB::table('insumo')->select('codigo','marca','modelo','nombre','descripcion','cantidad')->where('codigo','=',$codigo)->get();
        if($insumo->isEmpty()) // si retorna vacio es que no existe, 
        {
            return redirect('/inventario')->withErrors(['Problema al Agregar Existencias']);
        }

        //agregamos la cantidad a la base de datos
        $cantidad = $request->input("cantidad_agregar");
        \DB::table('insumo')->where('codigo','=',$codigo)->increment('cantidad', $cantidad);

        // redireccionamos 
        $insumos = \DB::table('insumo')->select('codigo','marca','modelo','nombre','descripcion','cantidad')->get();
        return view('inventario.inventario')->with('insumos', $insumos);

    }
    public function extraerExistencias()
    {


    }

}
