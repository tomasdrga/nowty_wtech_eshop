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
    Schema::create('shipping_information', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('first_name', 50);
      $table->string('last_name', 50);
      $table->string('telephone', 32);
      $table->string('address', 96);
      $table->string('city', 192);
      $table->string('postal_code', 20);
      $table->string('country', 90);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('shipping_information');
  }
};
