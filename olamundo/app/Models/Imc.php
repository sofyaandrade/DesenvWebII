<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imc extends Model
{
    use HasFactory;

    protected $table = 'imcs';

    protected $fillable = [
        'nome',
        'nascimento',
        'idade',
        'peso',
        'altura',
        'imc',
        'classificacao'
    ];

    protected $casts = [
        'nascimento' => 'date',
        'peso' => 'float',
        'altura' => 'float',
        'imc' => 'float',
    ];
}
