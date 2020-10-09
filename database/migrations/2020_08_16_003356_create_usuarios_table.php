<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->timestamp('cedula_verified_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('usuario')->unique();
            $table->timestamp('usuario_verified_at')->nullable();
            $table->string('password');
            $table->integer('id_pnf');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
//color de combinacion 1 #353C49,#435561,#84A498


//color de combinacion 1 #202142,#2D4258,#84A498

//background-image: linear-gradient(180deg, #b89bff 0, #9184ff 25%, #6c6cd8 50%, #4955b0 75%, #293f8a 100%);

//background-image: linear-gradient(180deg, #bf90f2 0, #8f6cd8 50%, #594bbf 100%);

//background-image: linear-gradient(180deg, #a501e5 0, #7202cb 25%, #3700ac 50%, #00018c 75%, #00006f 100%);