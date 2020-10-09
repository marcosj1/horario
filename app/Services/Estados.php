<?php
namespace App\Services;


use App\Estado;

/**
 * 
 */
class Estado
{
	public function get(){

		$estados = Estado::get();
		$estadosArray[''] = 'Seleccione un Estado';
		foreach ($estados as $estado) {
			$estadosArray[$estado->id] = $estado->nombre;
		}
		return $estadosArray;
	}

}