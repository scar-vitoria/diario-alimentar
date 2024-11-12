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
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->enum('tipo', ['alimento', 'bebida'])->default('alimento');
            $table->decimal('quant', 8, 2);
            $table->decimal('cal', 8, 2);
            $table->decimal('carb', 8, 2);
            $table->decimal('protein', 8, 2);
            $table->timestamps();
            $table->index('nome');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alimentos');
    }
};
