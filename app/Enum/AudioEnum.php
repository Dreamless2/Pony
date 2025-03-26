<?php

namespace App\Enum;

enum AudioEnum: string
{
    case NACIONAL = 'Nacional';
    case LEGENDADO = 'Legendado';
    case DUBLADO = 'Dublado';
    case DESCONHECIDO = 'Desconhecido';
}
