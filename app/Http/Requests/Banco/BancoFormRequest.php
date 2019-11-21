<?php

namespace App\Http\Requests\Banco;

use Illuminate\Foundation\Http\FormRequest;

class BancoFormRequest extends FormRequest
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
            'banco'     => 'required|min:2|max:30',
            'agencia'   => 'required|min:2|max:30',
        ];

    }

    public function messages()
    {
        return [
            'banco.required' => 'O nome do banco é obrigatório',
            'descricao.required' => 'A descrição é obrigatório',
            'agencia.required' => 'A agencia é obrigatório',
            'conta.required' => 'A conta é obrigatório',
            'tipo.required' => 'O tipo de conta é obrigatório',
        ];
    }
}
