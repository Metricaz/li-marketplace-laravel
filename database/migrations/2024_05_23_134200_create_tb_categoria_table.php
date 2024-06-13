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
        Schema::create('tb_categoria', function (Blueprint $table) {
            $table->id();
            $table->timestamp('categoria_data_criacao')->nullable();
            $table->timestamp('categoria_data_modificacao')->nullable();
            $table->boolean('categoria_ativa');
            $table->Integer('categoria_posicao')->nullable();
            $table->boolean('categoria_em_destaque');
            $table->string('categoria_template');
            $table->Integer('conta_id')->nullable();
            $table->Integer('lft')->nullable();
            $table->Integer('rght')->nullable();
            $table->Integer('tree_id')->nullable();
            $table->Integer('parent_id')->nullable();
            $table->Integer('level')->nullable();
            $table->bigInteger('contrato_id')->nullable();
            $table->string('categoria_url');
            $table->Integer('categoria_id_externo')->nullable();
            $table->string('categoria_nome');
            $table->string('categoria_descricao');
            $table->string('categoria_apelido');
            $table->Integer('categoria_id_anymarket')->nullable();
            $table->timestamp('_created_at')->nullable();
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_anymarket_status');
    }
};
