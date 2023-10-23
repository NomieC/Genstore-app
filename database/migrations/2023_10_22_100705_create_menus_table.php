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
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('menu_name')->unique();
            $table->integer('menu_price');
            $table->string('menu_type');
            $table->string('menu_category');
            $table->string('menu_desc', 1000)->nullable();
            $table->string('menu_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('menus');
    }
};
