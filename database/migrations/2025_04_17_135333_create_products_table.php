<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID'); // Define primary key explicitly
            $table->string('name')->unique();
            $table->text('Description')->nullable();
            $table->integer('Price');
            // $table->decimal('Price', 8, 2);
            $table->integer('stock')->default(0);
            // $table->binary('Picture')->nullable();
            $table->string('image_path')->nullable();
        
            $table->string('manufacturer_id');
            $table->foreign('manufacturer_id')->references('manufacturer_id')->on('manufacturers'); // Foreign key to st_id in student
            $table->timestamps();
          
        });
          // Alter the Picture column to be a LONG BLOB
        //   DB::statement("ALTER TABLE products MODIFY Picture LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
