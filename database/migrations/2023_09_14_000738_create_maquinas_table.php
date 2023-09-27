<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->decimal('codigo');
            $table->string('sigla');
            $table->date('dataCompra');
            $table->decimal('potencialNominal', 10, 2); // Coluna para potencialNominal, com 10 dígitos no total e 2 casas decimais
            $table->decimal('capacidadeProducao', 10, 2); // Coluna para capacidadeProducao, com 10 dígitos no total e 2 casas decimais
            $table->decimal('valorCompra', 10, 2); // Coluna para valorCompra, com 10 dígitos no total e 2 casas decimais
            // Adicione outras colunas conforme necessário
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
