<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pnf extends Model
{
    protected $table = 'pnfs'; 
	protected $fillable = ['nombre', 'codigo'];
}
