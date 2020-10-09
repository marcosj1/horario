<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
     protected $table = 'bitacora';
    protected $fillable = ['accion','fecha','tabla'];
}
