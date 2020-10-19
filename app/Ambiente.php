<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'ambiente';
    protected $fillable = ['nombre','id_sede','id_tipo_ambiente'];

    public static function ambientes($id){
  		return ambiente::where('id_sede','=',$id)
  		->get();
  	}

    public static function ambientess($id){
      return ambiente::where('id_tipo_ambiente','=',$id)
      ->get();
    }
}
