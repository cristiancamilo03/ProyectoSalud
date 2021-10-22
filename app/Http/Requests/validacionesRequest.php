<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validacionesRequest extends FormRequest
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
            'nombre' => 'required',
            'edad' => 'required',
            'fechaInforme' => 'required',
            'documentoInforme' => 'required',
            'entidadInforme' => 'required',
            'direccionInforme' => 'required',
            'telefonoPaciente' => 'required',
            'diagnostico' => 'required',
            'cuidadorP' => 'required',
            'conciencia' => 'required',
            'estadoP' => 'required',
            'drenaje' => 'required',
            'venopuncion' => 'required',
            'alimentacion' => 'required',
            'deposición' => 'required',
            'orina' => 'required',
            'oxigeno' => 'required',
            'vomito' => 'required',
            'hemovac' => 'required',
            'sonda' => 'required',
            'liquidoE' => 'required',
            'nombreM' => 'required',
            'presentacion' => 'required',
            'concentracion' => 'required',
            'dilucion' => 'required',
            'viaAdmon' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'enfermero' => 'required',
            'viaAdministracion' => 'required',
            'observaciones' => 'required',
        ]; 
    }

    public function messages(){//Para mensajes personalizados
        return[
            'required' => "Campo requerido",
            'alpha' => "Solo letras",
            'email' => "Debe ser formato email",
            'max' => "Se permiten :max caracteres"
        ];
    }
}
