<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioTresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeiro_numero' => 'required|numeric',
            'segundo_numero' => 'required|numeric',
            'terceiro_numero'=> 'required|numeric',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'error' => $validator->errors(),
            ])
        );
    }

    public function messages()
    {
        return [
            'primeiro_numero.required' => 'Preencha o campo primeiro numero',
            'primeiro_numero.numeric' => 'O campo é somente numeros',
            'segundo_numero.required' => 'Preencha o campo segundo numero',
            'segundo_numero.numeric' => 'O campo é somente numeros',
            'terceiro_numero.required' => 'Preencha o campo terceiro numero',
            'terceiro_numero.numeric' => 'O campo é somente numeros',
        ];
    }
}
