<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionTecnicosController extends Controller
{
    //
    public function eliminarTecnico(Request $request)
    {
        $rut = $request->input("rut");
        DB::table('tecnico')->where('rut', '=', $rut)->delete();
    }

    public function getTecnicos()
    {
        $tecnicos = DB::table('tecnico')->get();
        return $tecnicos;

    }
     
    public function getTecnico(Request $request)
    {
        $rut = $request->input("rut");
        $tecnico = DB::table('tecnico')->where('rut', '=', $rut)->get();
        return $tecnico;
    }
}
