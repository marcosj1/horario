<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dedicacion extends Model
{
    protected $table = 'dedicacions';
    protected $fillable = ['nombre', 'horas_acreditables', 'horas_aula', 'horas_totales'];
}
