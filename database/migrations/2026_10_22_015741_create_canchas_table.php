<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('canchas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('deporte'); 
        $table->string('superficie');
        $table->integer('precioHora'); 
        $table->string('imagen');
        $table->string('imagenBanner');
        $table->text('descripcion'); 
        $table->json('horariosDisponibles'); 
        $table->string('horarioAtencion');
        $table->string('direccion');
        $table->json('prestaciones'); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canchas');
    }
};
