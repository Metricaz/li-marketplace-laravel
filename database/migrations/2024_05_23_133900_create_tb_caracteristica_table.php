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
        Schema::create('tb_caracteristica', function (Blueprint $table) {
            $table->id();
            $table->string('caracteristica_tipo');
            $table->timestamp('caracteristica_data_criacao')->nullable();
            $table->bigInteger('caracteristica_posicao')->nullable();
            $table->string('caracteristica_pode_filtrar');
            $table->timestamp('caracteristica_data_modificacao')->nullable();
            $table->bigInteger('caracteristica_id_pai')->nullable();
            $table->bigInteger('categoria_global_id')->nullable();
            $table->string('caracteristica_nome');
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
