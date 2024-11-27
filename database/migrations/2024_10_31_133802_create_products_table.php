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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('seller_site');
            $table->string('sku');
            $table->string('name');
            $table->Integer('price')->nullable();
            $table->string('sold_by');
            $table->string('highlight');
            $table->string('category');
            $table->Integer('category_id')->nullable();
            $table->string('product_nickname')->nullable();
            $table->string('full_description');
            $table->string('feature_image');
            $table->string('images');
            $table->string('locale')->nullable();
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
        Schema::dropIfExists('products');
    }
};
