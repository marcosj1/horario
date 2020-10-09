<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pnf;
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pnfs')->delete();
        Pnf::create(array(
        'id' => 1,
        'nombre' => 'INFORMATICA',
				'codigo' => '07',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));
		DB::table('users')->delete();

		User::create(array(
			'id' => 1,
			'name' => 'Marcos',
			'apellido' => 'Rivas',
			'email' => 'marcosrivas156@gmail.com',
			'cedula' => '24942443',
			'id_pnf' => '1',
			'password' => Hash::make('12345'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime
		));
	}

}
