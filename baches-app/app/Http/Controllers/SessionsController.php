<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.inicioConLog');
    }

    public function store(){

        if(auth()->attempt(request(['email','password']))==false){
            return back()->withErrors([
                'message'=>'Correo o Contraseña incorrecta, intenta de nuevo'
            ]);
        }else{
            if(auth()->user()->role=='admin'){
                return redirect()->to('admin');
            }else{
                return redirect()->to('/');
            }
        }
        
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }

}
