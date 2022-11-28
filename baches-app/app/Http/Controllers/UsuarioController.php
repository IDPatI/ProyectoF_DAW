<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuario;
use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function crearCuenta(){
        return view('auth.CrearCuenta');
    }

    public function create(CreateUsuario $a){
        $usuario = new User();
        $usuario->name = $a['name'];
        $usuario->apellido = $a['apellido'];
        $usuario->password = $a['password'];
        $usuario->email = $a['email'];
        $usuario->save();
        //$user =User::create(request(['name','apellido','email','password']));
        auth()->login($usuario);
        return route("inicio");
    }
}
