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
        Schema::create('producto_bodega', function (Blueprint $table) {
            $table->id();
            $table->integer('stock maximo');
            $table->integer('stock minimo');

            $table->unsignedBigInteger('producto_id'); 
            $table->foreign('producto_id')
                ->references('id') 
                ->on('producto')
                ->onDelete('cascade');

            $table->unsignedBigInteger('bodega_id'); 
            $table->foreign('bodega_id')
                ->references('id') 
                ->on('bodega')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_bodega');
    }
};
