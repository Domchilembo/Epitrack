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
        Schema::create('autoridadedecaso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autoridade_id');
            $table->unsignedBigInteger('caso_id');
            $table->text('acoes_tomadas');
            $table->timestamp('data_acao')->useCurrent();
            $table->timestamps();
    
            $table->foreign('autoridade_id')->references('id')->on('autoridadesaude')->onDelete('cascade');
            $table->foreign('caso_id')->references('id')->on('casos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridadedecaso');
    }
};
