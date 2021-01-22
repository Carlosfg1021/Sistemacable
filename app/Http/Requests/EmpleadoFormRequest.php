<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoFormRequest extends FormRequest
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
            'nombre_empleado'=>'required|max:255',
            'apellido_empleado'=>'required|max:255',
            'dpi'=>'max:25',
            'telefono'=>'max:25',
            'direccion'=>'required|max:255',
            'usuario'=>'max:25',
            'contrasena'=>'max:25',
        ];
    }
}
