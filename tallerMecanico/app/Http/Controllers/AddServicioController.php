<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
class AddServcioController extends Controller
{
    //

    public function index()
    {
        $tecnicos = \DB::table('tecnico')->get();
        // return $tecnicos;
         return view('gestionServicios.addServicio')->with("tecnicos", $tecnicos);


    }
}
