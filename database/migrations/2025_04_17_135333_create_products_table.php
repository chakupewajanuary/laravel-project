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
            $table->integer('Price');
            // $table->decimal('Price', 8, 2);
            $table->integer('stock')->default(0);
            // $table->string('Picture')->nullable(false);
            $table->string('Picture')->nullable();

            $table->string('manufacturer_id');
            $table->foreign('manufacturer_id')->references('manufacturer_id')->on('manufacturers'); // Foreign key to st_id in student

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
