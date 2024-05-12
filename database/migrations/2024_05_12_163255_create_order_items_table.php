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
        Schema::create('order_items', function (Blueprint $table) {
           $table->uuid('id')->primary();
           $table->enum('size', ['xs', 's', 'm', 'l', 'xl', '2xl']);
           $table->integer('quantity');
           $table->uuid('order_id');
           $table->foreign('order_id')->references('id')->on('orders');
           $table->uuid('product_id');
           $table->foreign('product_id')->references('id')->on('products');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
