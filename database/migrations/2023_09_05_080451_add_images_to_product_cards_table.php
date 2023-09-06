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
        Schema::table('product_cards', function (Blueprint $table) {
            $table->after('image', function ($table) {
                $table->text('image_slider_1')->nullable();
                $table->text('image_slider_2')->nullable();                
                $table->text('image_front_product')->nullable();
                $table->text('image_color')->nullable();
            });       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_cards', function (Blueprint $table) {
            //
        });
    }
};
