<?php

namespace App\Http\Controllers;

use App\Enum\AudioEnum;
use App\Models\FilmesModel;
use Duyplus\TMDBApi\TMDB;
use Illuminate\Contracts\View\View;
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
            'data_lancamento' => 'required|string',
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

        $item = FilmesModel::create($request->only([
            'codigo',
            'titulo',
            'audio',
            'sinopse',
            'titulo_original',
            'data_lancamento',
            'titulo_alternativo',
            'filme',
            'franquia',
            'genero',
            'tags',
            'diretor',
            'estrelas',
            'estudio',
            'mcu'
        ]));

        return response()->json([
            'message' => 'Filme cadastrado com sucesso!',
            'data' => $item
        ], 201);
    }
}
