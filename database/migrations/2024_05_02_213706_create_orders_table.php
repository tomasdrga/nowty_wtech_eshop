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
          $table->uuid('id')->primary();
          $table->string('order_number')->unique();

          $table->decimal('shipping_price', 7, 2);

          $table->uuid('user_id')->nullable();
          $table->foreign('user_id')->references('id')->on('users');

          $table->uuid('shipping_id')->nullable();
          $table->foreign('shipping_id')->references('id')->on('shipping_information');

          $table->uuid('payment_id')->nullable();
          $table->foreign('payment_id')->references('id')->on('payment_information');

          $table->enum('order_status', ['pending', 'processing', 'shipped', 'delivered', 'canceled'])->default('pending');

          $table->decimal('total', 7, 2);
          $table->timestamps();
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
