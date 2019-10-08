<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Database\QueryException;

class AddTecnicosController extends Controller
{
    //

    public function addTecnico(Request $request)
    {
        $rut = $request->input("rut");
        $primerNombre = $request->input("primernombre");
        $segundoNombre = $request->input("segundonombre");
        $primerApellido = $request->input("primerapellido");
        $segundoApellido = "no es nulo bb";
        $numeroContacto = $request->input("numerocontacto");
        $correo = $request->input("correo");

        try { 
        //Your code
            \DB::table('tecnico')->insert(
            ['rut' => $rut, 'primernombre' => $primerNombre , 'segundonombre' => $segundoNombre ,
            'primerapellido' => $primerApellido, 'segundoapellido' => $segundoApellido, 
            'numerocontacto' => $numeroContacto, 'correo' => $correo]
        );
        } catch(QueryException $ex){ 
            dd($ex->getMessage()); 
        }
        
        $tecnicos = \DB::table('tecnico')->get();
       // return $tecnicos;
        return view('gestionarTecnicos.gestionarTecnicos')->with("tecnicos", $tecnicos);
    }
    
}
