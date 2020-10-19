<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
 /**
 * Run the migrations.
 *
 * @return void
 */
 public function up()
 {
 Schema::create('users', function($table) {
 $table->bigIncrements('id');
 $table->string('name', 20);
 $table->string('apellido', 20);
 $table->string('cedula', 20);
 $table->string('id_pnf', 20);
 $table->string('email', 100);
 $table->string('password', 64);



 $table->rememberToken();
 $table->timestamps();
 });

 DB::unprepared('CREATE TRIGGER registrar_users AFTER INSERT ON `users` FOR EACH ROW
        BEGIN
           INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Usuario");
        END');
  DB::unprepared('CREATE TRIGGER actualizar_users AFTER UPDATE ON `users` FOR EACH ROW
        BEGIN
           INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Usuario");
        END');
   DB::unprepared('CREATE TRIGGER eliminar_users AFTER DELETE ON `users` FOR EACH ROW
        BEGIN
           INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Usuario");
        END');

 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down()
 {
 Schema::drop('users');
 }
}
