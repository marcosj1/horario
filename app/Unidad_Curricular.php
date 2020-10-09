<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_Curricular extends Model
{
    protected $table = 'unidad_curriculars';
	protected $fillable = ['nombre', 'codigo','uc','id_pnf'];
}
