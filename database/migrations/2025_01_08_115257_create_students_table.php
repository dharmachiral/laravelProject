<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('studentName');
        $table->string('address');
        $table->string('phone')->unique();
        $table->enum('gender', ['male', 'female', 'other']);
        $table->string('country')->default('Nepal'); // Default country set to Nepal
        $table->unsignedTinyInteger('province')
              ->check('province BETWEEN 1 AND 7'); // Inline check constraint
        $table->date('birthdate');
        $table->string('email')->unique();
        $table->tinyInteger('status')->default(1); // Active by default
        // $table->softDelete();
        $table->timestamps();
        // $table->string('image')->nullable(); // Allow null for image column
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
