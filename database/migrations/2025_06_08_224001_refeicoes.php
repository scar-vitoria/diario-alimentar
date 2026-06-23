<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {  
        Schema::create('refeicoes', function (Blueprint $table) {     
            $table->id();
            $table->date('data');
            $table->string('tipo');
            $table->string('periodo');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('refeicoes', function (Blueprint $table){
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
    });
    }
};
