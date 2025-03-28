<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmesModel extends Model
{
    Laravel\Sanctum\HasApiTokens
    protected $table = 'filmes';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['codigo', 'titulo', 'audio', 'sinopse', 'titulo_original', 'data_lancamento', 'titulo_alternativo', 'filme', 'franquia', 'genero', 'tags', 'diretor', 'estrelas', 'estudio','mcu'];
}
