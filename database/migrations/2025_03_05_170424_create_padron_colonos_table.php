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
        Schema::create('padron_colonos', function (Blueprint $table) {
            $table->string('idColono', 50)->primary();
            $table->string('apellido1', 20)->nullable();
            $table->string('apellido2', 20)->nullable();
            $table->string('nombre', 10)->nullable();
            $table->string('apodo', 10)->nullable();
            $table->string('dni', 10)->nullable();
            $table->string('telefono', 10)->nullable();
            $table->string('email', 40)->nullable();
            $table->string('idJuntaHazas', 20)->nullable();
            $table->string('idHabitante', 20);
            $table->enum('tipoDireccion', ['calle', 'avenida', 'plaza', 'carretera', 'camino', 'callejon'])->nullable();
            $table->string('nombreDireccion', 10)->nullable();
            $table->string('numeroDireccion', 10)->nullable();
            $table->string('bloqueDireccion', 10)->nullable();
            $table->string('escaleraDireccion', 10)->nullable();
            $table->string('piso', 10)->nullable();
            $table->string('puerta', 10)->nullable();
            $table->string('codigoPostal', 10)->nullable();
            $table->foreign('idJuntaHazas')->references('idJuntaHazas')->on('junta_hazas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('idHabitante')->references('idHabitante')->on('padron_habitantes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('padron_colonos');
    }
};
