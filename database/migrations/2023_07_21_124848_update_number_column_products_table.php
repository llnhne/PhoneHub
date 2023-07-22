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
        Schema::table('products', function (Blueprint $table) {
            $table->float('number_name', 3, 0)->after('price');
            $table->unsignedInteger('color_id')->after('category_id');
            $table->unsignedInteger('ram_id')->after('color_id');
            $table->unsignedInteger('rom_id')->after('ram_id');
            $table->unsignedInteger('chip_id')->after('rom_id');
            $table->unsignedInteger('screen_id')->after('chip_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
