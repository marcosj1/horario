<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadCurricularsTable extends Migration
{

    public function up()
    {
        Schema::create('unidad_curriculars', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('codigo')->unique();
            $table->string('uc');
            $table->string('id_pnf');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_unidad_curriculars AFTER INSERT ON `unidad_curriculars` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Unidad Curricular");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_unidad_curriculars AFTER UPDATE ON `unidad_curriculars` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Unidad Curricular");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_unidad_curriculars AFTER DELETE ON `unidad_curriculars` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Unidad Curricular");
               END');

    }


    public function down()
    {
        Schema::dropIfExists('unidad_curriculars');
    }
}
