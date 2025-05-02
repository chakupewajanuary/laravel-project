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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('pro_id');  // auto increment primary key
            $table->string('name');
            $table->string('time');
            $table->unsignedBigInteger('st_id'); // explicitly define st_id as an unsigned big integer
            $table->foreign('st_id')->references('st_id')->on('students'); // Foreign key to st_id in student
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
