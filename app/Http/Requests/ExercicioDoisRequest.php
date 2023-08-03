<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioDoisRequest extends FormRequest
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
            'primeira_entrada' => 'required|numeric' ,
            'segunda_entrada' => 'required|numeric',
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
            'primeira_entrada.required' => 'Preencha o campo primeira entrada',
            'primeira_entrada.numeric' => 'O campo é somente numeros',
            'segunda_entrada.required' => 'Preencha o campo segunda entrada',
            'segunda_entrada.numeric' => 'O campo é somente numeros',
            
        ];
    }
}
