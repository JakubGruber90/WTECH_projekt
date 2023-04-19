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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('customer_id');
            $table->integer('shipping_id');
            $table->integer('payment_id');
            $table->integer('cart_id');
            $table->float('price');
            $table->string('status');
            $table->timestamp('created_at');
            $table->timestamp('shipped_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
