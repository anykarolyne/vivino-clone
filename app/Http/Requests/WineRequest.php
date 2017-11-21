<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WIneRequest extends Request
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
            'name'                  => 'required|max:255',
            'phone'                 => 'required|max:20',
            'email'                 => 'required|email|max:100',
            'name'                  => 'required|max:255',
            'phone'                 => 'required|max:20',
            'email'                 => 'required|email|max:100'

        ];
    }



    public function messages()
    {
        return [
            'name.required'                   => 'É obrigatório inserir o Nome',
            'name.max'                        => 'O nome deve ter no maximo :max caracteres',
            
            'phone.required'                  => 'É obrigatório inserir o telefone',
            'phone.max'                       => 'O telefone deve ter no maximo :max caracteres',

            'email.required'                  => 'É obrigatório inserir o Email.',
            'email.email'                     => 'Inserir formato de email correto, EX: exemplo@domain.com.',
            'email.max'                       => 'O Email deve ter no maximo :max caracteres.',

        ];

    }
}
