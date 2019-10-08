<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTecnicosController extends Controller
{
    //

    public function addTecnico(Request $request)
    {
        $rut = $request->input("rut");
        $primerNombre = $request->input("primerNombre");
        $segundoNombre = $request->input("segundoNombre");
        $primerApellido = $request->input("primerApellido");
        $segundoApellido = $request->input("segundoApellido");
        $numeroContacto = $request->input("numeroContacto");
        $correo = $request->input("correo");

        DB::table('tecnico')->insert(
            ['rut' => $rut, 'primernombre' => $primerNombre , 'segundonombre' => $segundoNombre ,
            'primerapellido' => $primerApellido, 'segundoapellido' => $segundoApellido, 
            'numerocontacto' => $numeroContacto, 'correo' => $correo]
        );
        return "Agregado";
    }
    
}
