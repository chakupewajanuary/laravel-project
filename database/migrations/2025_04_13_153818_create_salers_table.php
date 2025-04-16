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
        Schema::create('salers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // For storing names
            $table->string('email')->unique(); // For storing emails, ensuring uniqueness
            $table->text('address'); // For storing addresses
            $table->string('phone'); // For storing phone numbers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salers');
    }
};
