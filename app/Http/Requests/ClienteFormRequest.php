<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nombre_cliente'=>'required|max:255',
            'apellido_cliente'=>'required|max:255',
            'dpi'=>'max:25',
            'nit'=>'max:25',
            'telefono'=>'max:15',
            'propiedad'=>'max:255',
        ];
    }
}
