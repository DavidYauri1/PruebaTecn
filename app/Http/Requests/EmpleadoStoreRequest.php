<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoStoreRequest extends FormRequest
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
        $empleado = $this->route('empleado');
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'Dni' => ['required', 'unique:empleados,Dni'],
            'email' => 'required|email|unique:empleados',
            'area' => 'required',
            'cargo' => 'required',
            'local' => 'required',
            'nacimiento' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Campo nombre es requerido ',

            'apellidos.required' => 'Campo Apellidos es requerido ',
            'Dni.required' => 'Dni es requerido requerido ',
            'email.required' => 'El nombre es requerido ',

            'area.required' => 'El nombre es requerido ',

            'cargo.required' => 'El nombre es requerido ',

            'local.required' => 'El nombre es requerido ',

            'nacimiento.required' => 'El nombre es requerido ',

            'inicio.required' => 'El nombre es requerido ',
            'fin.required' => 'El nombre es requerido ',
            'type.required' => 'El nombre es requerido ',



        ];
    }
}
