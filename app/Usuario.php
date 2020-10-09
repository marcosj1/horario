<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'users';
	protected $fillable = ['name', 'apellido', 'cedula', 'email', 'usuario', 'password', 'id_pnf'];
}
