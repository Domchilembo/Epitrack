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
        Schema::create('detectarsurtos', function (Blueprint $table) {
            $table->id();
            $table->string('regiao', 255);
            $table->integer('casos_confirmados');
            $table->integer('limite_alarme');
            $table->enum('nivel_alerta', ['baixo', 'moderado', 'alto']);
            $table->timestamp('data_analise')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detectarsurtos');
    }
};
