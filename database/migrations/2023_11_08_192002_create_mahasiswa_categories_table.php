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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->foreign('category_id')
                ->unique()
                ->references('category_id')
                ->on('categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('mahasiswa_id')
                ->unique()
                ->references('mahasiswa_id')
                ->on('mahasiswas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
