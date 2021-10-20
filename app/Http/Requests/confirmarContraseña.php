<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class confirmarContraseña extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|unique:users,email',
            'password' => 'required|confirmed',//El confirmed sirve para hacer lo de confirmar contraseña.
            'name' => 'required|alpha_num|unique:users,name'
        ];
    }

    public function messages(){//Para mensajes personalizados
        return[
            'required' => "Campo requerido",
            'alpha' => "Solo letras",
            'email' => "Debe ser formato email",
            'max' => "Se permiten :max caracteres",
            'confirmed' => "Este campo no coincide",
        ];
        
    }
}
