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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->date('OrderDate');
            $table->string('Status');
            $table->string('username'); // Foreign Key
            // $table->unsigned('username'); // explicitly define st_id as an unsigned big integer
            $table->foreign('username')->references('username')->on('customers'); // Foreign key to st_id in student
            $table->timestamps();

            // Set up the foreign key relationship
            // $table->foreign('CustomerUsername')->references('username')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
