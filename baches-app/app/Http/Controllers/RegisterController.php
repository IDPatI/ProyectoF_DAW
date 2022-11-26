<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.CrearCuenta');
    }

    public function store(){

        $this->validate(request(),[
            'name'=>'required',
            'apellido'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);


        $user =User::create(request(['name','apellido','email','password']));
        auth()->login($user);
        return redirect()->to('/');
    }
}
