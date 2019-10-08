<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class GestionTecnicosController extends Controller
{
    //
    public function index()
    {
        $tecnicos = \DB::table('tecnico')->get();
       // return $tecnicos;
        return view('gestionarTecnicos.gestionarTecnicos')->with("tecnicos", $tecnicos);
       

    }
    public function eliminarTecnico(Request $request)
    {
        $rut = $request->input("rut");
        DB::table('tecnico')->where('rut', '=', $rut)->delete();
    }


    public function getTecnico($rut)
    {
        
        $tecnico = DB::table('tecnico')->where('rut', '=', $rut)->get();
        return $tecnico;
    }

   

}
