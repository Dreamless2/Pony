<?php

namespace App\Http\Controllers;

use App\Models\FilmesModel;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function Primeiro()
    {
        $filme = FilmesModelsModel::first();
        return response()->json($filme);
    }
    public function Ultimo()
    {
        $filme = FilmesModel::latest()->first();
        return response()->json($filme);
    }

}
