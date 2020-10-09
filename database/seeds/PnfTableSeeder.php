<?php

use Illuminate\Database\Seeder;

class PnfTableSeeder extends Seeder
{
 	public function run()
	{
		DB::table('pnfs')->delete();
		User::create(array(
			'id' => 1,
			'nombre' => 'Informática',
			'created_at' => new DateTime,
			'updated_at' => new DateTime 
		)); 
	}

}