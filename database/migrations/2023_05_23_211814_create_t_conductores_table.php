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
        Schema::create('t_conductores', function (Blueprint $table) {
            $table->id();
            $table->string('reg_institucional',100);
            $table->date('fecha_reg');
            $table->string('fotografia',200);
            $table->integer('celular');
            $table->string('cod_licencia',100);
            $table->string('categoria',2);
            $table->unsignedBigInteger('per_id')->nullable();
            $table->foreign('per_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_coonductores');
    }
};
