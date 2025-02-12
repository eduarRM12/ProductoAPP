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
        Schema::create('producto_factura_compra', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio', 10, 2);
            $table->decimal('valor_iva', 10, 2);
            $table->decimal('total', 10, 2);
            $table->integer('cantidad');
            $table->decimal('valor_descuento', 10, 2);
            $table->decimal('iva', 3, 1);
            $table->decimal('descuento', 3, 1);
            $table->unsignedBigInteger('producto_id'); 
            $table->foreign('producto_id')
                  ->references('id') 
                  ->on('producto')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_factura_compra');
    }
};
