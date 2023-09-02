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
        Schema::create('product_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price')->default(0);
            $table->text('property')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->integer('category_id');
            $table->integer('color_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cards');
    }
};
