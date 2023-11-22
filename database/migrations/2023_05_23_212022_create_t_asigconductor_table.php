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
        Schema::create('t_asigconductor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_titular')->nullable();
            $table->unsignedBigInteger('id_relevo')->nullable();
             $table->foreign('id_titular')
                    ->references('id')->on('t_conductores')
                    ->onDelete('set null');

            $table->foreign('id_relevo')
            ->references('id')->on('t_conductores')
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
        Schema::dropIfExists('t_asigconductor');
    }
};
