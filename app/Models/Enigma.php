<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enigma extends Model
{
    protected $fillable = [
        'nome',
        'imagem',
        'historia',
        'solucao',
    ];
}