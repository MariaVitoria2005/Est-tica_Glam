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
        Schema::create('servico_detalhes', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do serviço
            $table->text('descricao'); // Descrição do serviço
            $table->decimal('valor', 8, 2); // Valor do serviço
            $table->string('foto'); 
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')
                ->references('id')
                ->on('servico')
                ->onDelete('cascade');
            $table->enum('status', ['ativo', 'inativo'])->default('ativo'); // Status do serviço (ativo ou inativo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico_detalhes');
    }
};
