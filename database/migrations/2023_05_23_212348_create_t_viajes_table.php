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
        Schema::create('t_viajes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_salida');
            $table->time('hora_salida');
            $table->unsignedBigInteger('ruta_id')->nullable();
            $table->unsignedBigInteger('bus_id')->unique()->nullable();
            $table->unsignedBigInteger('asigcdc_id')->unique()->nullable();
            $table->unsignedBigInteger('id_of')->nullable();
            $table->foreign('ruta_id')
                    ->references('id')->on('t_ruta')
                    ->onDelete('cascade');
            $table->foreign('bus_id')
                    ->references('id')->on('t_buses')
                    ->onDelete('set null');
            $table->foreign('asigcdc_id')
                    ->references('id')->on('t_asigconductor')
                    ->onDelete('set null');
            $table->foreign('id_of')
                    ->references('id')->on('t_oficinas')
                    ->onDelete('set null');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_viajes');
    }
};
