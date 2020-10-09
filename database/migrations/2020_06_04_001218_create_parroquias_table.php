<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
             $table->string('nombre');
            $table->integer('id_municipio');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_parroquias AFTER INSERT ON `parroquias` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Parroquia");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_parroquias AFTER UPDATE ON `parroquias` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Parroquia");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_parroquias AFTER DELETE ON `parroquias` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Parroquia");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
}
