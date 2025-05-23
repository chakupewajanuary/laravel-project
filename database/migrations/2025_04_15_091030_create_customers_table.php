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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('username')->primary(); // For storing names
            $table->string('email')->unique(); // For storing emails, ensuring uniqueness
            $table->text('address'); // For storing addresses
            $table->string('phone'); // For storing phone numbers
            $table->string('password'); // For storing phone numbers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
