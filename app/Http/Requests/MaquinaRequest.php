<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaquinaRequest extends FormRequest
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
            'codigo' => 'required|integer', // Identificador como inteiro
            'sigla' => 'required|string|max:255', // Sigla como texto com no máximo 255 caracteres
            'dataCompra' => 'required|date', // Data de compra como data válida
            'potencialNominal' => 'required|numeric', // Potência nominal como número
            'capacidadeProducao' => 'required|numeric', // Capacidade produtiva como número
            'valorCompra' => 'required|numeric' // Valor da compra como número
        ];
    }
    public function messages(): array
    {
        return [
            'sigla.required' => 'Sigla é obrigatória', // Sigla como texto com no máximo 255 caracteres
            'dataCompra' => 'Data da compra é obrigatória', // Data de compra como data válida
            'potencialNominal.*' => 'Potencial nominal é obrigatória', // Potência nominal como número
            'capacidadeProducao.*' => 'Capacidade de producao é obrigatória', // Capacidade produtiva como número
            'valorCompra' => 'Valor compra é obrigatória' // Valor da compra como número
        ];
    }
}
