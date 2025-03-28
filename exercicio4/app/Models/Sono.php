<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sono extends Model
{
      use HasFactory;

    protected $table = 'sonos';

    protected $fillable = [
        'nome',
        'nascimento',
        'idade',
        'horas_sono',
        'qualidade'
    ];

    protected $casts = [
        'nascimento' => 'date',
    ];
}
