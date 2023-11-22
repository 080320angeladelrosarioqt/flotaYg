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
        Schema::create('t_ruta-oficinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ruta');
            $table->unsignedBigInteger('id_of');
            $table->foreign('id_ruta')
                    ->references('id')->on('t_ruta')
                    ->onDelete('cascade');
            $table->foreign('id_of')
                    ->references('id')->on('t_oficinas')
                    ->onDelete('cascade');
                    $table->float('costo');
                    $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
