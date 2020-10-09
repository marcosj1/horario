<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrayectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('id_pnf');
            $table->string('codigo');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_trayectos AFTER INSERT ON `trayectos` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Trayecto");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_trayectos AFTER UPDATE ON `trayectos` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Trayecto");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_trayectos AFTER DELETE ON `trayectos` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Trayecto");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trayectos');
    }
}
