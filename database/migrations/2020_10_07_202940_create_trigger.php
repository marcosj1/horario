<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
         DB::unprepared('CREATE TRIGGER registrar AFTER INSERT ON `estados` FOR EACH ROW
                BEGIN
                   INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Estado");
                END');
          DB::unprepared('CREATE TRIGGER actualizar AFTER UPDATE ON `estados` FOR EACH ROW
                BEGIN
                   INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Estado");
                END');
           DB::unprepared('CREATE TRIGGER eliminar AFTER DELETE ON `estados` FOR EACH ROW
                BEGIN
                   INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Estado");
                END');
    }


    public function down()
    {
        DB::unprepared('DROP TRIGGER `user_default_role`');
    }
}
