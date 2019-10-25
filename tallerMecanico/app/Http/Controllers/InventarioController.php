<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InventarioController extends Controller
{
    //

    public function index()
    {


    }
    public function agregarInsumo(Request $request)
    {

        $messages = [
            'cantidad.max'    => 'La cantidad es superior a 9999',
        ];
        
        //return $request;
        $validator = Validator::make($request->all(), 
        [
            'codigo' => 'required|max:50',
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'cantidad' => 'numeric|min:1|max:9999'
        ], $messages
        );

        if ($validator->fails()) {
            return $validator->errors();
        }


        $codigo = $request->input("codigo");
        $nombre = $request->input("nombre");
        $marca = $request->input("marca");
        $modelo = $request->input("modelo");
        $cantidad = $request->input("cantidad");
        

        //Necesitamos validar

        



        

    }

    public function agregarExistencias()
    {

    }
    public function extraerExistencias()
    {


    }

}
