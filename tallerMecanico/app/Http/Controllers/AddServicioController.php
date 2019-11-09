<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
class AddServicioController extends Controller
{
    //

    public function index()
    {
        $tecnicos = \DB::table('tecnico')->get();
        $clientes = \DB::table('cliente')->get();
        
        // return $tecnicos;
         return view('gestionServicios.addServicio')->with("tecnicos", $tecnicos);
    }

    public function addServicio()
    {
        try { 
            $estadoActual = 'ingresado';
            $refVehiculo = 'hh-ff-11';
            $refCliente = '19.122.444';
            $refsecretaria = 'Secretaria 1';
            $fechaIngreso = '12/12/2010';

            //Your code
                \DB::table('servicio')->insert(
                ['estadoactual' => $estadoActual, 'refvehiculo' => $refVehiculo , 'refcliente' => $refCliente ,
                'refsecretaria' => $refsecretaria, 'fechaingreso' => $fechaIngreso ]
            );
            } catch(QueryException $ex){ 
                dd($ex->getMessage()); 
            }
    }
}
