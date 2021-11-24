<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Controle', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->integer('Telefone');
            $table->integer('CPF');
            $table->string('Placa_do_Carro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Controles');
    }
}
