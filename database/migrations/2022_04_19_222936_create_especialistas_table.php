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
        Schema::create('especialistas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("iddoctor")->nullable();
            $table->foreign('iddoctor')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger("idespecialidad")->nullable();
            $table->foreign('idespecialidad')->on('especialidads')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('especialistas');
    }
};
