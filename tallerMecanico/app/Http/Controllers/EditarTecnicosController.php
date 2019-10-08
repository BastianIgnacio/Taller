<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarTecnicosController extends Controller
{
    //

    public function editarTecnico(Request $request)
    {
        $rut = $request->input("rut");
        $primerNombre = $request->input("primerNombre");
        $segundoNombre = $request->input("segundoNombre");
        $primerApellido = $request->input("primerApellido");
        $segundoApellido = $request->input("segundoApellido");
        $numeroContacto = $request->input("numeroContacto");
        $correo = $request->input("correo");

        DB::table('tecnico')->where('rut', $rut )->update(
            [   'primernombre' => $primerNombre , 'segundonombre' => $segundoNombre ,
                'primerapellido' => $primerApellido, 'segundoapellido' => $segundoApellido, 
                'numerocontacto' => $numeroContacto, 'correo' => $correo
            ]);
            
    }
}
