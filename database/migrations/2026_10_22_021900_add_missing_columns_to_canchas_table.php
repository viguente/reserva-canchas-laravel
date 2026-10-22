<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('canchas', function (Blueprint $table): void {
            if (! Schema::hasColumn('canchas', 'nombre')) {
                $table->string('nombre')->default('');
            }
            if (! Schema::hasColumn('canchas', 'deporte')) {
                $table->string('deporte')->default('');
            }
            if (! Schema::hasColumn('canchas', 'superficie')) {
                $table->string('superficie')->default('');
            }
            if (! Schema::hasColumn('canchas', 'precioHora')) {
                $table->integer('precioHora')->default(0);
            }
            if (! Schema::hasColumn('canchas', 'imagen')) {
                $table->string('imagen')->default('');
            }
            if (! Schema::hasColumn('canchas', 'imagenBanner')) {
                $table->string('imagenBanner')->default('');
            }
            if (! Schema::hasColumn('canchas', 'descripcion')) {
                $table->text('descripcion')->default('');
            }
            if (! Schema::hasColumn('canchas', 'horariosDisponibles')) {
                $table->json('horariosDisponibles')->default('[]');
            }
            if (! Schema::hasColumn('canchas', 'horarioAtencion')) {
                $table->string('horarioAtencion')->default('');
            }
            if (! Schema::hasColumn('canchas', 'direccion')) {
                $table->string('direccion')->default('');
            }
            if (! Schema::hasColumn('canchas', 'prestaciones')) {
                $table->json('prestaciones')->default('[]');
            }
        });
    }

    public function down(): void
    {
        // The added fields are part of the canchas table's required schema.
    }
};
