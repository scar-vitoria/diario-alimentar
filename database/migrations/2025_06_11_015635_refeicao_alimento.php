<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refeicao_alimento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('refeicao_id')->constrained('refeicoes')->onDelete('cascade');
            $table->foreignId('alimento_id')->constrained('alimentos')->onDelete('cascade');
            $table->integer('quantidadeConsumida');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refeicao_alimento');
    }
};
