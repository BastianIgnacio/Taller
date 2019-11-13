<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    public function visualizar(Request $request,$codigo)
    {
        
        return view('gestionServicios.servicio')->with('codigo',$codigo);
    }

    public function serviciosActivos()
    {
        return view('gestionServicios.serviciosActivos');
    }
}
