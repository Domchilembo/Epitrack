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
        Schema::create('relatoriosmedicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('caso_id');
            $table->unsignedBigInteger('medico_id');
            $table->text('descricao');
            $table->timestamp('data_relatorio')->useCurrent();
            $table->timestamps();
    
            $table->foreign('caso_id')->references('id')->on('casos')->onDelete('cascade');
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatoriosmedicos');
    }
};
