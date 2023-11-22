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
        Schema::create('t_propietarios', function (Blueprint $table) {
            $table->id();
            $table->string('cod_soc',100);
            $table->date('fecha_reg');
            $table->integer('fotografia');
            $table->integer('celular');
            $table->unsignedBigInteger('per_id')->nullable();
            $table->unsignedBigInteger('id_ingreso')->nullable();
            $table->foreign('per_id')
                    ->references('id')->on('users')
                    ->onDelete('set null');
            $table->foreign('id_ingreso')
                    ->references('id')->on('t_ingreso')
                    ->onDelete('set null');
            $table->timestamps();
            $table->boolean('estado');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_propietarios');
    }
};
