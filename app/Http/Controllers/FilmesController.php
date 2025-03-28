<?php

namespace App\Http\Controllers;

use App\Enum\AudioEnum;
use App\Models\FilmesModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;
use vfalies\tmdb\Item;
use vfalies\tmdb\Search;

class FilmesController extends Controller
{
    public function index()
    {
        return view('Filmes.index');
    }

    public function create()
    {
        $tmdb = Factor::create()->getTmdb('');
        $item  = new Item($tmdb);
        $infos = $item->getMovie(11, array('language' => 'pt-BR'));
        $title = $infos->getTitle();

    }

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
            'titulo_alternativo' => 'string',
            'filme' => 'required|string',
            'franquia' => 'string',
            'genero' => 'required|string',
            'tags' => 'required|string',
            'diretor' => 'required|string',
            'estrelas' => 'required|string',
            'estudio' => 'required|string',
            'mcu' => 'string'
        ]);

        $item = FilmesModel::create([
            'codigo' => $request->codigo,
            'titulo' => $request->titulo,
            'audio' => $request->audio,
            'sinopse' => $request->sinopse,
            'titulo_original' => $request->titulo_original,
            'data_lancamento' => $request->data_lancamento,
            'titulo_alternativo' => $request->titulo_alternativo,
            'filme' => $request->filme,
            'franquia' => $request->franquia,
            'genero' => $request->genero,
            'tags' => $request->tags,
            'diretor' => $request->diretor,
            'estrelas' => $request->estrelas,
            'estudio' => $request->estudio,
            'mcu' => $request->mcu,
        ]);

        return response()->json($item);
    }
}
