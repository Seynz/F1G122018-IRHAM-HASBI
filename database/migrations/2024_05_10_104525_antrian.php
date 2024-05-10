<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antrian', function(Blueprint $table){
            $table->id();
            $table->string('no_antrian');
            $table->enum('status antrian',['S','B']);
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('pasien');
            $table->unsignedBigInteger('id_dokter');
            $table->foreign('id_dokter')->references('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
