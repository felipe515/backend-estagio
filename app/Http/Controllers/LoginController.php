<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kreait\Firebase\Value\Email;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'O campo email é obrigatorio!',
            'email.email' => 'O email não valido',
            'password.required' => 'O campo password é obrigatorio!',
        ]
        
    );

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return view('dispositivo');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha invalida!');
        }

    }
}
