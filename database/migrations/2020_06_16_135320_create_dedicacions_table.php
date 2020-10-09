<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('horas_acreditables');
            $table->integer('horas_aula');
            $table->integer('horas_totales');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_dedicacions AFTER INSERT ON `dedicacions` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Dedicacion");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_dedicacions AFTER UPDATE ON `dedicacions` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Dedicacion");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_dedicacions AFTER DELETE ON `dedicacions` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Dedicacion");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedicacions');
    }
}
