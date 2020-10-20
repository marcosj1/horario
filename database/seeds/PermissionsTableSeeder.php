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

        //pnf
        Permission::create([
                'name' => 'editar pnf',
                'slug' => 'pnf.edit',
                'description' => 'editar rolees'
      ]);

        Permission::create([
              'name' => 'create pnf',
              'slug' => 'pnf.create',
              'description' => 'create pnf'
    ]);
        Permission::create([
            'name' => 'eliminar pnf',
            'slug' => 'pnf.delete',
            'description' => 'eliminar pnf'
  ]);
       Permission::create([
          'name' => 'index pnf',
          'slug' => 'pnf.index',
          'description' => 'index rolees'
]);

//estado
Permission::create([
        'name' => 'editar estado',
        'slug' => 'estado.edit',
        'description' => 'estado rolees'
]);

Permission::create([
      'name' => 'create estado',
      'slug' => 'estado.create',
      'description' => 'create estado'
]);
Permission::create([
    'name' => 'eliminar estado',
    'slug' => 'estado.delete',
    'description' => 'eliminar esrado'
]);
Permission::create([
  'name' => 'index estado',
  'slug' => 'estado.index',
  'description' => 'index estado'
]);


//parroquia
Permission::create([
        'name' => 'editar parroquia',
        'slug' => 'parroquia.edit',
        'description' => 'parroquia edit'
]);

Permission::create([
      'name' => 'create parroquia',
      'slug' => 'parroquia.create',
      'description' => 'create parroquia'
]);
Permission::create([
    'name' => 'eliminar parroquia',
    'slug' => 'parroquia.delete',
    'description' => 'eliminar parroquia'
]);
Permission::create([
  'name' => 'index parroquia',
  'slug' => 'parroquia.index',
  'description' => 'index parroquia'
]);

//municipio
Permission::create([
        'name' => 'editar municipio',
        'slug' => 'municipio.edit',
        'description' => 'municipio editar'
]);

Permission::create([
      'name' => 'create municipio',
      'slug' => 'municipio.create',
      'description' => 'create municipio'
]);
Permission::create([
    'name' => 'eliminar municipio',
    'slug' => 'municipio.delete',
    'description' => 'eliminar municipio'
]);
Permission::create([
  'name' => 'index municipio',
  'slug' => 'municipio.index',
  'description' => 'index municipio'
]);


//categoria
Permission::create([
        'name' => 'editar categoria',
        'slug' => 'categoria.edit',
        'description' => 'categoria editar'
]);

Permission::create([
      'name' => 'create categoria',
      'slug' => 'categoria.create',
      'description' => 'create categoria'
]);
Permission::create([
    'name' => 'eliminar categoria',
    'slug' => 'categoria.delete',
    'description' => 'eliminar categoria'
]);
Permission::create([
  'name' => 'index categoria',
  'slug' => 'categoria.index',
  'description' => 'index categoria'
]);

//dedicacion
Permission::create([
        'name' => 'editar dedicacion',
        'slug' => 'dedicacion.edit',
        'description' => 'dedicacion editar'
]);

Permission::create([
      'name' => 'create dedicacion',
      'slug' => 'dedicacion.create',
      'description' => 'create dedicacion'
]);
Permission::create([
    'name' => 'eliminar dedicacion',
    'slug' => 'dedicacion.delete',
    'description' => 'eliminar dedicacion'
]);
Permission::create([
  'name' => 'index dedicacion',
  'slug' => 'dedicacion.index',
  'description' => 'index dedicacion'
]);


//docente
Permission::create([
        'name' => 'editar docente',
        'slug' => 'docente.edit',
        'description' => 'docente editar'
]);

Permission::create([
      'name' => 'create docente',
      'slug' => 'docente.create',
      'description' => 'create docente'
]);
Permission::create([
    'name' => 'eliminar docente',
    'slug' => 'docente.delete',
    'description' => 'eliminar docente'
]);
Permission::create([
  'name' => 'index docente',
  'slug' => 'docente.index',
  'description' => 'index docente'
]);

//area
Permission::create([
        'name' => 'editar area',
        'slug' => 'area.edit',
        'description' => 'area editar'
]);

Permission::create([
      'name' => 'create area',
      'slug' => 'area.create',
      'description' => 'create area'
]);
Permission::create([
    'name' => 'eliminar area',
    'slug' => 'area.delete',
    'description' => 'eliminar area'
]);
Permission::create([
  'name' => 'index area',
  'slug' => 'area.index',
  'description' => 'index area'
]);

//ambiente
Permission::create([
        'name' => 'editar ambiente',
        'slug' => 'ambiente.edit',
        'description' => 'ambiente editar'
]);

Permission::create([
      'name' => 'create ambiente',
      'slug' => 'ambiente.create',
      'description' => 'create ambiente'
]);
Permission::create([
    'name' => 'eliminar ambiente',
    'slug' => 'ambiente.delete',
    'description' => 'eliminar ambiente'
]);
Permission::create([
  'name' => 'index ambiente',
  'slug' => 'ambiente.index',
  'description' => 'index ambiente'
]);


//especialidad
Permission::create([
        'name' => 'editar especialidad',
        'slug' => 'especialidad.edit',
        'description' => 'especialidad editar'
]);

Permission::create([
      'name' => 'create especialidad',
      'slug' => 'especialidad.create',
      'description' => 'create especialidad'
]);
Permission::create([
    'name' => 'eliminar especialidad',
    'slug' => 'especialidad.delete',
    'description' => 'eliminar especialidad'
]);
Permission::create([
  'name' => 'index especialidad',
  'slug' => 'especialidad.index',
  'description' => 'index especialidad'
]);

//lapso
Permission::create([
        'name' => 'editar lapso',
        'slug' => 'lapso.edit',
        'description' => 'lapso editar'
]);

Permission::create([
      'name' => 'create lapso',
      'slug' => 'lapso.create',
      'description' => 'create lapso'
]);
Permission::create([
    'name' => 'eliminar lapso',
    'slug' => 'lapso.delete',
    'description' => 'eliminar lapso'
]);
Permission::create([
  'name' => 'index lapso',
  'slug' => 'lapso.index',
  'description' => 'index lapso'
]);

//sede
Permission::create([
        'name' => 'editar sede',
        'slug' => 'sede.edit',
        'description' => 'sede editar'
]);

Permission::create([
      'name' => 'create sede',
      'slug' => 'sede.create',
      'description' => 'create sede'
]);
Permission::create([
    'name' => 'eliminar sede',
    'slug' => 'sede.delete',
    'description' => 'eliminar sede'
]);
Permission::create([
  'name' => 'index sede',
  'slug' => 'sede.index',
  'description' => 'index sede'
]);

//tipo_ambiente
Permission::create([
        'name' => 'editar tipo_ambiente',
        'slug' => 'tipo_ambiente.edit',
        'description' => 'tipo_ambiente editar'
]);

Permission::create([
      'name' => 'create tipo_ambiente',
      'slug' => 'tipo_ambiente.create',
      'description' => 'create tipo_ambiente'
]);
Permission::create([
    'name' => 'eliminar tipo_ambiente',
    'slug' => 'tipo_ambiente.delete',
    'description' => 'eliminar tipo_ambiente'
]);
Permission::create([
  'name' => 'index tipo_ambiente',
  'slug' => 'tipo_ambiente.index',
  'description' => 'index tipo_ambiente'
]);

//trimestre
Permission::create([
        'name' => 'editar trimestre',
        'slug' => 'trimestre.edit',
        'description' => 'trimestre editar'
]);

Permission::create([
      'name' => 'create trimestre',
      'slug' => 'trimestre.create',
      'description' => 'create trimestre'
]);
Permission::create([
    'name' => 'eliminar trimestre',
    'slug' => 'trimestre.delete',
    'description' => 'eliminar trimestre'
]);
Permission::create([
  'name' => 'index trimestre',
  'slug' => 'trimestre.index',
  'description' => 'index trimestre'
]);


//trayecto
Permission::create([
        'name' => 'editar trayecto',
        'slug' => 'trayecto.edit',
        'description' => 'trayecto editar'
]);

Permission::create([
      'name' => 'create trayecto',
      'slug' => 'trayecto.create',
      'description' => 'create trayecto'
]);
Permission::create([
    'name' => 'eliminar trayecto',
    'slug' => 'trayecto.delete',
    'description' => 'eliminar trayecto'
]);
Permission::create([
  'name' => 'index trayecto',
  'slug' => 'trayecto.index',
  'description' => 'index trayecto'
]);

//unidad
Permission::create([
        'name' => 'editar unidad',
        'slug' => 'unidad.edit',
        'description' => 'unidad editar'
]);

Permission::create([
      'name' => 'create unidad',
      'slug' => 'unidad.create',
      'description' => 'create unidad'
]);
Permission::create([
    'name' => 'eliminar unidad',
    'slug' => 'unidad.delete',
    'description' => 'eliminar unidad'
]);
Permission::create([
  'name' => 'index unidad',
  'slug' => 'unidad.index',
  'description' => 'index unidad'
]);

    }
}
