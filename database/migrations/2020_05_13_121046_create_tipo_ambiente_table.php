<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoambienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_ambiente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_tipo_ambiente AFTER INSERT ON `tipo_ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Tipo de Ambiente");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_tipo_ambiente AFTER UPDATE ON `tipo_ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Tipo de Ambiente");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_tipo_ambiente AFTER DELETE ON `tipo_ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Tipo de Ambiente");
               END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_ambiente');
    }
}
