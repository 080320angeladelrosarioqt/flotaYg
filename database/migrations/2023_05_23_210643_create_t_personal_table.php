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
        Schema::create('t_personal', function (Blueprint $table) {
            $table->id();
            $table->integer('celular')->nullable();
            $table->date('fecha_reg');
            $table->string('fotografia');
            $table->unsignedBigInteger('per_id')->nullable();
            $table->unsignedBigInteger('id_cargo')->nullable();
            $table->unsignedBigInteger('id_of')->unique()->nullable();
            $table->foreign('per_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            $table->foreign('id_cargo')
                ->references('id')->on('t_cargos')
                ->onDelete('set null');
            $table->foreign('id_of')
                ->references('id')->on('t_oficinas')
                ->onDelete('cascade')
                 ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_personal');
    }
};
