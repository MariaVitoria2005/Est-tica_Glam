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
        Schema::table('servicos', function (Blueprint $table) {
            $table->renameColumn('nome', 'tipo_servico');
            $table->unsignedBigInteger('agendamento_id');
            $table->foreign('agendamento_id')
                ->references('id')
                ->on('agendamento')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicos', function (Blueprint $table) {
            //
        });
    }
};
