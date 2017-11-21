<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeRequest extends Request
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
            'name'       => 'required|max:255',
            'date'       => 'required|max:20',
            'account_id' => 'required|numeric',
            'contact_id' => 'required|numeric',
            'value'      => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'       => 'É obrigatório inserir a Descrição',
            'name.max'            => 'A descrição deve ter no maximo :max caracteres',
            
            'date.required'       => 'É obrigatório inserir a Data',
            
            'account_id.required' => 'É obrigatório inserir a Conta',
            'account_id.numeric'  => 'Favor Selecionar novamente a Conta',
            
            
            'contact_id.required' => 'É obrigatório inserir o Contato',
            'contact_id.numeric'  => 'Favor Selecionar novamente o Contato',
                        
            'value.required'      => 'É obrigatório inserir o Valor',
            
        ];
    }
}
