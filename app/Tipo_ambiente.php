<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_ambiente extends Model
{
    protected $table = 'tipo_ambiente';
    protected $fillable = ['nombre'];
}
