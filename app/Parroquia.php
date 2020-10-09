<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
   protected $table = 'parroquias';
    protected $fillable = ['nombre', 'id_municipio'];
}
