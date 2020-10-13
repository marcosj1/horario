<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSedeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sede', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('direccion');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_sede AFTER INSERT ON `sede` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Sede");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_sede AFTER UPDATE ON `sede` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Sede");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_sede AFTER DELETE ON `sede` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Sede");
               END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sede');
    }
}
