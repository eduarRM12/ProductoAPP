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
        Schema::create('factura_compra', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_factura')->unique();
            $table->date('fecha_compra');
            $table->date('fecha_pago');

            $table->unsignedBigInteger('proveedor_id'); 
            $table->foreign('proveedor_id')
                  ->references('id') 
                  ->on('contacto')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_compra');
    }
};
