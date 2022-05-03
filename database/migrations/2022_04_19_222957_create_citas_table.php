<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->unsignedBigInteger("idpaciente")->nullable();
            $table->foreign('idpaciente')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("idespecialista")->nullable();
            $table->foreign('idespecialista')->on('especialistas')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('citas');
    }
};
