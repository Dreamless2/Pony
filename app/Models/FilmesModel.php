<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class FilmesModel extends Model
    use HasApiTokens, HasFactory, Notifiable;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'filmes';
    protected $primaryKey = 'id';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['codigo', 'titulo', 'audio', 'sinopse', 'titulo_original', 'data_lancamento', 'titulo_alternativo', 'filme', 'franquia', 'genero', 'tags', 'diretor', 'estrelas', 'estudio','mcu'];
}
