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
        Schema::table('profissionais', function (Blueprint $table) {
            $table->string('nome');
            $table->string('email');
            $table->string('disponibilidades');
            $table->unsignedBigInteger('agendamento_id');
            $table->foreign('agendamento_id')
                ->references('id')
                ->on('agendamento')
                ->onDelete('cascade');
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')
                ->references('id')
                ->on('servico')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profissionais', function (Blueprint $table) {
            //
        });
    }
};
