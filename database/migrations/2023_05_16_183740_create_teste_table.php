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
        Schema::create('teste', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->string('nome',100);
            $table->text('descricao');
            $table->float('ponto_flutuante');
            $table->boolean('booleano')->default(0); #o - false, 1 - true
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teste');
    }
};
