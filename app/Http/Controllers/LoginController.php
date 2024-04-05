<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required', 'senha'],
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('img');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha invalida!');
        }

    }
}
