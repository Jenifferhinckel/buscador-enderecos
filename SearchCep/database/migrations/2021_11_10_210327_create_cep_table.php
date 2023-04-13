<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('localidade');
            $table->string('uf');
            $table->integer('ibge');
            $table->string('gia')->nullable();
            $table->integer('ddd');
            $table->integer('siafi');
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
        Schema::dropIfExists('cep');
    }
}
