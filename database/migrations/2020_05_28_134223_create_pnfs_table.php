<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePnfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pnfs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('codigo');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER registrar_pnfs AFTER INSERT ON `pnfs` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Registrar",now(),"Pnf");
               END');
         DB::unprepared('CREATE TRIGGER actualizar_pnfs AFTER UPDATE ON `pnfs` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Actualizar",now(),"Pnf");
               END');
          DB::unprepared('CREATE TRIGGER eliminar_pnfs AFTER DELETE ON `pnfs` FOR EACH ROW
               BEGIN
                  INSERT INTO bitacora (accion, fecha, tabla) VALUES ("Eliminar",now(),"Pnf");
               END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pnfs');
    }
}
