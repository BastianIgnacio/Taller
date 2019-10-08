<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function addTecnico(){
        return view('gestionarTecnicos.addTecnico');
    }

    public function editarTecnico(){
        return view('gestionarTecnicos.editarTecnico');
    }

    public function gestionarTecnicos(){
        return view('gestionarTecnicos.gestionarTecnicos');
    }

    public function addServicio(){
        return view('addServicio.addServicio');
    }

    public function gestionarPermisos(){
        return view('gestionarPermisos.gestionarPermisos');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function addProveedor(){
        return view('gestionarProveedores.addProveedor');
    }

    public function gestionarProveedores(){
        return view('gestionarProveedores.gestionarProveedores');
    }
    public function gestionarInventario(){
        return view('inventario.gestionarInventario');
    }

    public function addInventario(){
        return view('inventario.addInventario');
    }
}
