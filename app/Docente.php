<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
	protected $fillable = ['nombre', 'apellido','cedula','direccion','telefono','id_especialidad','id_categoria','id_dedicacion'];
}
