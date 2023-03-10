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
        Schema::table('products', function (Blueprint $table) {
            $table
                ->integer('min_quantity')
                ->default(1)
                ->after('quantity');
        });
    }

    // Adicionar o campo min_quantity na tabela products
    // ! PARA DELETAR OU ALTERAR UMA MIGRATION, VERIFICAR NO BANCO DE DADOS
    // ! SE ESSA MIGRATION ESTIVER NO DATABASE, USAR O ROLLBACK
    // ! CASO ELA NÃO ESTEJA, AÍ PODERÁ EXCLUIR A MIGRATION
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('min_quantity');
        });
    }
};
