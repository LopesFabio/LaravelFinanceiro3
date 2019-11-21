<?php

namespace App\Http\Requests\Conta;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
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
            'banco' => 'required',
            'conta' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'banco.required' => 'Selecione um Banco',
            'conta.required' => 'Digite o número da Conta',
        ];
    }
}
