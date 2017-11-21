<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EconomyRequest extends Request
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
            'desc'                  => 'required|max:255',
            'value'                 => 'required',

        ];
    }



    public function messages()
    {
        return [
            'desc.required'                   => 'É obrigatório inserir uma descrição',
            'desc.max'                        => 'A descrição deve ter no maximo :max caracteres',
            
            'value.required'                   => 'É obrigatório inserir um valor',
            

        ];

    }
}
