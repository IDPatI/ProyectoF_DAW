<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'apellido'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ];
    }

    public function name(){
        return [
            'name'=>'Nombre',
            'apellido'=>'Apellido',
            'email'=>'Correo',
            'password'=>'Contraseña'
        ];

    }

    public function messages(){
        return [
            'name.required'=>'Debe de ingresar su(s) Nombre(s)',
            'apellido.required'=>'Debe de ingresar su(s) Apellidos(s)',
            'email.required'=>'Debe de ingresar su Correo',
            'email.email'=>'El correo ingresado no es valido',
            'password.required'=>'Debe de ingresar una Contraseña',
            'password.confirmed'=>'Las contraseñas no coinciden'
        ];
    }
}
