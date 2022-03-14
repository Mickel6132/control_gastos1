<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('usuario', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_nombre');
            $table->string('usu_email');
            $table->string('usu_direccion');
            $table->string('usu_ruc');
            $table->string('usu_telefono');
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('usuario');
    }
}
