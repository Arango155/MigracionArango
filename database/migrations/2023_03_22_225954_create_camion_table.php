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
        Schema::create('camion', function (Blueprint $table) {
            $table->integer('id_placa')->primary();
            $table->String('placa_camion',6);
            $table->String('marca',45)->nullable();
            $table->String('color',25)->nullable();
            $table->DATE('modelo')->nullable();
            $table->integer('capacidad_toneladas');
            $table->foreignId('id_transporte')->references('id')->on('transporte');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
