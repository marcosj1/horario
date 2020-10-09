<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->string('direccion');
            $table->string('telefono')->unique();
            $table->integer('id_especialidad');
            $table->integer('id_categoria');
            $table->integer('id_dedicacion');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_docentes AFTER INSERT ON `docentes` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Docentes");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_docentes AFTER UPDATE ON `docentes` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Docentes");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_docentes AFTER DELETE ON `docentes` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Docentes");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
