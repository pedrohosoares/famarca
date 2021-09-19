<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborators', function (Blueprint $table) {
            $table->id();
            $table->string('cpf','11')->unique();
            $table->string('email','150')->unique();
            $table->string('rg','14');
            $table->string('cep','8');
            $table->string('endereco','150');
            $table->smallInteger('numero')->unsigned()->nullable();
            $table->string('cidade','100');
            $table->string('estado','50');
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
        Schema::dropIfExists('colaborators');
    }
}
