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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('pais');
            $table->integer('poblacion');
            $table->decimal('area', 8, 2);
            $table->boolean('capital');
            $table->date('fecha_fundacion');
            $table->text('descripcion');
            $table->enum('clima', ['Tropical', 'Templado', 'Árido']);
            $table->string('moneda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};
