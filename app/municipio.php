<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
	protected $table = 'municipios';
	protected $fillable = ['nombre', 'id_estado'];


	public static function municipios($id){
		return municipio::where('id_estado','=',$id)
		->get();
	}
}
