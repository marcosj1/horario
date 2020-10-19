<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('id_sede');
            $table->integer('id_tipo_ambiente');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_ambiente AFTER INSERT ON `ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Ambiente");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_ambiente AFTER UPDATE ON `ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Ambiente");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_ambiente AFTER DELETE ON `ambiente` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Ambiente");
               END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambiente');
    }
}
