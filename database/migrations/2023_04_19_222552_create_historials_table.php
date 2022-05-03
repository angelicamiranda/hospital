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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('idpaciente')->nullable();
            $table->foreign('idpaciente')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("idconsulta")->nullable();
            $table->foreign('idconsulta')->on('consultas')->references('id')->onDelete('cascade');
           
            
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
        Schema::dropIfExists('historials');
    }
};
