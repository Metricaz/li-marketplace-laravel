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
        Schema::create('tb_caracteristica_valor', function (Blueprint $table) {
            $table->id();
            $table->string('caracteristica_valor_valor');
            $table->string('idioma_id');
            $table->Integer('caracteristica_id')->nullable();
            $table->Integer('caracteristica_valor_posicao')->nullable();
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
