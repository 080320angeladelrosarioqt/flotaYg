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
        Schema::create('t_oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion',100);
            $table->string('municipio',100);
            $table->time('horario_atencion');
            $table->time('horario_conclusion');
            $table->unsignedBigInteger('id_dep')->unique()->nullable();
            $table->foreign('id_dep')
                    ->references('id')->on('t_departamentos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_oficinas');
    }
};
