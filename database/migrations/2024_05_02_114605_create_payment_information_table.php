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
    Schema::create('payment_information', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('first_name', 32);
      $table->string('last_name', 32);
      $table->string('card_number', 20);
      $table->string('expiration_date', 32);
      $table->string('security_code', 4);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('payment_information');
  }
};
