<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('id_estado');
            $table->timestamps();

            //$table->foreign('id_estado')->references('id')->on('estados');
        });

        DB::unprepared('CREATE TRIGGER registrar_municipios AFTER INSERT ON `municipios` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Municipio");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_municipios AFTER UPDATE ON `municipios` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Municipio");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_municipios AFTER DELETE ON `municipios` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Municipio");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
