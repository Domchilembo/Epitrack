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
        Schema::create('autoridadesaude', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('contato', 100);
            $table->string('email', 100)->unique();
            $table->string('organizacao', 100);
            $table->timestamp('data_cadastro')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autoridadedesaude');
    }
};
