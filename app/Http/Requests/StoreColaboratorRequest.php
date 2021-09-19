<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreColaboratorRequest extends FormRequest
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
            'cpf'=>'required|unique:connection.colaborators,cpf|digits:11',
            'rg'=>'required|digits_between:13,14',
            'cep'=>'required|digits:8',
            'endereco'=>'required|digits_between:13,100',
            'numero'=>'required|integer',
            'cidade'=>'required|digits_between:4,70',
            'estado'=>'required|digits:2'
        ];
    }
}
