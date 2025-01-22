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

            $table->foreignId('brand_id')
                ->constrained();
            $table->foreignId('type_id')
                ->constrained();
            $table->string('name');
            $table->string('unit');
            $table->text('image_path');
            $table->decimal('price');
            $table->string('sku');
            $table->text('description');
            $table->boolean('is_featured');
            $table->boolean('is_new_from_stock');
            $table->boolean('is_best_seller');

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
