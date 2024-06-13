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
        Schema::create('tb_anymarket_status', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->integer('id_modelo')
            $table->string('status');
            $table->string('mensagem');
            $table->timestamp('data_modificacao')->nullable();
            $table->integer('conta_id')
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
