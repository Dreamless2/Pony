<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmesModel extends Model
{
    protected $table = 'filmes';
    protected $hidden = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['codigo', 'titulo', 'audio', 'sinopse', 'titulo_original', 'data_lancamento', 'titulo_alternativo', 'filme', 'franquia', 'genero', 'tags', 'diretor', 'estrelas', 'estudio','mcu'];
}
