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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('referencia');
            $table->json('etiquetas');
            $table->text('descripcion')->nullable();
            $table->string('url')->nullable();
            $table->decimal('precio_venta', 10, 2);
            $table->integer('iva');
            $table->unsignedBigInteger('unidad_medida_id'); 
            $table->foreign('unidad_medida_id')
                  ->references('id') 
                  ->on('unidad_medida')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
