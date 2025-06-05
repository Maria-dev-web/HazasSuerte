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
        Schema::create('sorteo', function (Blueprint $table) {
            $table->string('idSorteo', 20)->primary();
            $table->string('idHabitante', 20);
            $table->string('idHaza', 20);
            $table->date('fecha');
            $table->foreign('idHabitante')->references('idHabitante')->on('padron_habitantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idHaza')->references('idHaza')->on('hazas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorteo');
    }
};
