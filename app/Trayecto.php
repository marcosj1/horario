<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayecto extends Model
{
	protected $table = 'trayectos';
	protected $fillable = ['nombre', 'id_pnf','codigo'];
}
