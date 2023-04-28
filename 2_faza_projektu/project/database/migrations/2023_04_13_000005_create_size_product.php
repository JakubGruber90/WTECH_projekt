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
        Schema::create('size_products', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->integer('quantity')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('size_products');
    }
};