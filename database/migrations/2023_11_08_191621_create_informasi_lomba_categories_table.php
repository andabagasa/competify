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
        Schema::create('informasi_lomba_categories', function (Blueprint $table) {
            $table->id('informasi_lomba_category_id', 32)->unique();
            $table->foreignId('id_lomba', 32)->unique();
            $table->foreignId('category_id', 32)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_lomba_category');
    }
};
