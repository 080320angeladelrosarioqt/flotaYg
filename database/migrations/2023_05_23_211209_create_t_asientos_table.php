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
        Schema::create('t_asientos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_asiento');
            $table->string('descripcion',50);
            $table->unsignedBigInteger('id_bus')->unique()->nullable();
            $table->foreign('id_bus')
                    ->references('id')->on('t_buses')
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
        Schema::dropIfExists('t_asientos');
    }
};
