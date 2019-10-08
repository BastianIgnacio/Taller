<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
   public function autenticar(Request $request)
   {

        $email = $request->input("email");
        $password = $request->input("password");
        $rol = $request->input("rol");
        $credentials = [
            'email' => $request->input("email"),
            'password' => $request->input("password"),
            'rol' => $request->input("rol"),
        ];
        //dd($credentials);
        
        if (Auth::attempt($credentials))
        {
            return $email;
        }
        return $password;
        
    }
}
