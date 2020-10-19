<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([

          //usuarios

          'name' => 'ver usuarios',
          'slug' => 'usuario.index',
          'description' => 'lista los usuarios'
]);
  Permission::create([

          'name' => 'ver detalles de usuario',
          'slug' => 'usuario.show',
          'description' => 'ver detalles de los usuarios'
]);
  Permission::create([

          'name' => 'editar usuarios',
          'slug' => 'usuario.edit',
          'description' => 'editar usuarios'
]);
  Permission::create([

          'name' => 'eliminar usuarios',
          'slug' => 'usuario.delete',
          'description' => 'eliminar los usuarios'
]);
  Permission::create([
          //roles

          'name' => 'crear rolees',
          'slug' => 'rol.create',
          'description' => 'lista los rolees'
]);
  Permission::create([
          'name' => 'ver rol',
          'slug' => 'rol.index',
          'description' => 'lista los rolees'
]);
  Permission::create([
          'name' => 'ver detalles de rolees',
          'slug' => 'rol.show',
          'description' => 'ver detalles de los rolees'
]);
  Permission::create([
          'name' => 'editar rolees',
          'slug' => 'rol.edit',
          'description' => 'editar rolees'
]);
  Permission::create([
          'name' => 'eliminar rolees',
          'slug' => 'rol.delete',
          'description' => 'eliminar los rolees'




        ]);
    }
}
