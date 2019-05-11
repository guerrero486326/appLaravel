<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name' => 'required|min:3|unique:categories',
            'image' => 'required|image'
        ];
    }
    /**
    * esta funcion es para personalizar los mensajes para mostrar en caso de un error
    */
    public function messages(){
        return [
            'name.required' => 'El nombre de la cargoria es requerido',
            'name.min' => 'El nombre de la categoria debe tener mínimo tres caracteres',
        ];
    }
}
