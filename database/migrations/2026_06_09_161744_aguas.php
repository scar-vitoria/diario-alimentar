<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('aguas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora');
            $table->integer('quant');
            $table->foreignId('user_id_agua')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
         Schema::dropIfExists('aguas');

    }

};
