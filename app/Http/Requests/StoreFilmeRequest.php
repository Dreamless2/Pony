<?php

namespace App\Http\Requests;

use App\Models\FilmesModel;
use Illuminate\Foundation\Http\FormRequest;

class StoreFilmeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'codigo' => 'required|numeric',
            'titulo' => 'required|string',
            'audio' => ['required', new Enum(AudioEnum::class)],
            'sinopse' => 'required|string',
            'data_lancamento' => 'required|date_format:d/m/Y',
            'genero' => 'required|string',
            'tags' => 'required|string',
            'diretor' => 'required|string',
            'estrelas' => 'required|string',
            'estudio' => 'required|string',
            'mcu' => 'nullable|string'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (FilmesModelodel::where('codigo', $this->codigo)->exists()) {
                $validator->errors()->add('codigo', 'Este código já está cadastrado.');
            }
        });
    }
}
