<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountRequest extends Request
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
            'name_bank'       => 'required|max:255',
            'number'          => 'required|max:20',
            'type_account_id' => 'required|numeric',

        ];
    }



    public function messages()
    {
        return [
            'name_bank.required'    => 'É obrigatório inserir o Nome do Banco',
            'name_bank.max'         => 'O nome deve ter no maximo :max caracteres',
            
            'number.required'       => 'É obrigatório inserir o numero da conta',
            'number.max'            => 'O telefone deve ter no maximo :max caracteres',
            
            'type_account_id.required' => 'É obrigatório inserir o Tipo de Conta.',
            'type_account_id.numeric'  => 'Houve algum erro, favor selecionar novamente o tipo de conta',

        ];

    }
}
