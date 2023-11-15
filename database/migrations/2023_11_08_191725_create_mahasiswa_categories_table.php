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
        Schema::create('mahasiswa_categories', function (Blueprint $table) {
            $table->id('mahasiswa_category_id', 32)->unique();
            $table->foreignId('mahasiswa_id', 32)->unique();
            $table->foreignId('category_id', 32)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_categories');
    }
};
