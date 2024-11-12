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
        Schema::create('refeicoesalimentos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->foreignId('refeicao_id')->constrained('refeicoes')->onDelete('cascade');
            $table->foreignId('alimento_id')->constrained('alimentos')->onDelete('cascade');
            $table->decimal('quant', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refeicoesalimentos');
    }
};
