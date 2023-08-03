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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('bill_name')->unique();
            $table->string('user_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->float('sum_price', 12, 0);
            $table->text('description')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('pays_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
