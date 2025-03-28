<?php

namespace App\Http\Controllers;

use App\Enum\AudioEnum;
use App\Models\FilmesModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class FilmesController extends Controller
{
    public function Primeiro()
    {
        $filme = FilmesModel::first();
        return response()->json($filme);
    }
    public function Ultimo()
    {
        $filme = FilmesModel::latest()->first();
        return response()->json($filme);
    }
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|numeric',
            'titulo' => 'required|string',
            'audio' => ['required', new Enum(AudioEnum::class)],
            'sinopse' => 'required|string',
            'titulo_original' => 'required|string',
            'data_lancamento' => 'required|date_format:d/m/Y',
            'titulo_alternativo' => 'nullable|string',
            'filme' => 'required|string',
            'franquia' => 'nullable|string',
            'genero' => 'required|string',
            'tags' => 'required|string',
            'diretor' => 'required|string',
            'estrelas' => 'required|string',
            'estudio' => 'required|string',
            'mcu' => 'nullable|string'
        ]);

        // 🚨 Verificação extra antes de inserir
        if (FilmesModel::where('codigo', $request->codigo)->exists()) {
            return response()->json([
                'message' => $request->titulo . ' já está cadastrado.'
            ], 400);
        }

        $item = FilmesModel::create($request->all());

        return response()->json([
            'message' => 'Filme cadastrado com sucesso!'
        ], 201);
    }
}
