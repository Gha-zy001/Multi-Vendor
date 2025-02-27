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
    Schema::create('languages', function (Blueprint $table) {
      $table->id();
      $table->string('abbr', 10);
      $table->string('locale', 10);
      $table->string('name', 100);
      $table->string('native', 100);
      $table->string('flag', 100)->nullable();
      $table->string('a_name', 100)->nullable();
      $table->string('script', 100)->nullable();
      $table->enum('direction', ['ltr', 'rtl'])->default('ltr');
      $table->tinyInteger('active')->default(1);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('languages');
  }
};
