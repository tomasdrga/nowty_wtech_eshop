<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('information', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('user_id');
      $table->foreign('user_id')->references('id')->on('users');

      $table->uuid('shipping_id')->nullable();
      $table->foreign('shipping_id')->references('id')->on('shipping_information');

      $table->uuid('payment_id')->nullable();
      $table->foreign('payment_id')->references('id')->on('payment_information');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('information');
  }
};
