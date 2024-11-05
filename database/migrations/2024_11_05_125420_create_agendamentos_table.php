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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('hora');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('cliente')
                ->onDelete('cascade');
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')
                ->references('id')
                ->on('servico')
                ->onDelete('cascade');
            $table->unsignedBigInteger('profissional_id');
            $table->foreign('profissional_id')
                ->references('id')
                ->on('profissional')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
