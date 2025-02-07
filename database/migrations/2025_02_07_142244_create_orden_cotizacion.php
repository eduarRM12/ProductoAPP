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
        Schema::create('orden_cotizacion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_creacion');
            $table->date('fecha_cierre') -> nullable();
            $table->text('descripcion')->nullable();
            $table->string('estado')->nullable();

            $table->unsignedBigInteger('responsable'); 
            $table->foreign('responsable')
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
        Schema::dropIfExists('orden_cotizacion');
    }
};
