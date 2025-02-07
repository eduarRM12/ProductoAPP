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
        Schema::create('producto_impuesto', function (Blueprint $table) {
            $table->id();
            $table->decimal('porcentaje', 3, 1);

            $table->unsignedBigInteger('producto_id'); 
            $table->foreign('producto_id')
                  ->references('id') 
                  ->on('producto')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('impuesto_id'); 
            $table->foreign('impuesto_id')
                  ->references('id') 
                  ->on('impuesto')
                  ->onDelete('cascade');
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_impuesto');
    }
};
