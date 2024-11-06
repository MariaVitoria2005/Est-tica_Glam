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
        Schema::create('cancelamentos', function (Blueprint $table) {
            $table->id();
            $table->decimal('percentagem',5,2);
            $table->longtext('descricao');
            $table->enum('tipo_servico', ['todos','manicure','depilacao','banho_de_lua']);
            $table->unsignedBigInteger('agendamento_id');
            $table->foreign('agendamento_id')
                ->references('id')
                ->on('agendamento')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancelamentos');
    }
};
