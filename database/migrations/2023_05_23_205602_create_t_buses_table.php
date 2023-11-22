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
        Schema::create('t_buses', function (Blueprint $table) {
            $table->id();
            $table->string('num_placa',50);
            $table->integer('num_asientos');
            $table->string('modelo',50);
            $table->integer('piso');
            $table->string('tipo',11);
            $table->string('fotografia',250);
            $table->unsignedBigInteger('id_prop')->nullable();
            $table->foreign('id_prop')
                    ->references('id')->on('t_propietarios')
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
        Schema::dropIfExists('t_buses');
    }
};
