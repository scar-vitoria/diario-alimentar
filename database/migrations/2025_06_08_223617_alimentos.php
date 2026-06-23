<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeReferencia');
            $table->string('tipoReferencia');
            $table->integer('quantidadeReferencia');
            $table->string('medidaReferencia');
            $table->integer('calReferencia');
            $table->integer('carbReferencia');
            $table->integer('proteinReferencia');   
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alimentos');
    }
};
