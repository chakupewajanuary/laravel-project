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
        Schema::create('products', function (Blueprint $table) {
            $table->string('ProductID')->primary(); // Define primary key explicitly
            $table->string('name')->unique();
            $table->text('Description')->nullable();
            $table->decimal('Price', 8, 2);
            $table->integer('stock')->default(0);
            $table->string('Picture')->nullable(false);
            $table->foreignId('manufacturer_id');
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
