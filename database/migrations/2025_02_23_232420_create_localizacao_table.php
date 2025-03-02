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
        Schema::create('localizacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('casos_id');
            $table->geometry('latitude');
            $table->geometry('longitude');
            $table->timestamp('data_localizacao')->useCurrent();
            $table->timestamps();
    
            $table->foreign('casos_id')->references('id')->on('casos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localizacao');
    }
};
