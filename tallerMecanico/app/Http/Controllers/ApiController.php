<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Redirect;

class ApiController extends Controller
{
    //

    public function getInsumo(Request $request, $codigo)
    {
        $insumo= \DB::table('insumo')->select('codigo','marca','modelo','nombre','descripcion','cantidad')->where('codigo','=',$codigo)->get();
        if($insumo->isEmpty()) // si retorna vacio es que no existe, 
        {
            return $insumo;
        }
        return response()->json($insumo);
    }
}
