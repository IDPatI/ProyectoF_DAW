<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BuscarBache extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'descripcion'=>'required|max:50'
        ];

    }
    public function messages(){
        return [
            'descripcion.required'=>'Sin descripción',
            'descripcion.max'=>'La descripcion debe ser de menos de 50 letras'
        ];
    }
}
