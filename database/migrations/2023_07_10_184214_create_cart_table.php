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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->float('sum_price', 11, 0);
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('bills_id');
            $table->unsignedInteger('numbers_id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('colors_id');
            $table->unsignedInteger('brands_id');
            $table->unsignedInteger('sales_id');
            $table->unsignedInteger('rams_id');
            $table->unsignedInteger('chips_id');
            $table->unsignedInteger('screens_id');
            $table->unsignedInteger('memorys_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
