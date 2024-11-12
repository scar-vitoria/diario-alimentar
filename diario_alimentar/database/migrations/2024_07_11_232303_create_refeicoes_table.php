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
        Schema::create('refeicoes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->string('tipo_ref', 30); // Exemplo: Café da manhã, Almoço, Jantar
            $table->string('periodo', 30);
            $table->string('humor', 30);
            $table->text('desc')->nullable();
            $table->string('img')->nullable(); // Imagem pode ser nula, caso não seja obrigatória
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refeicoes');
    }
};
