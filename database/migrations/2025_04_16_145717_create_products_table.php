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
          
            $table->string('ProductID')->primary(); // String-based ID
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->decimal('Price', 8, 2);
            $table->string('manufacturer_id'); // ManufacturerID as a string
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade');
            $table->string('Picture')->nullable(false); // Picture must always have a value

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
