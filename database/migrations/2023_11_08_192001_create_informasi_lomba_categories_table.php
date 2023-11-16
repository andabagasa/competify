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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('id_lomba');
            $table->foreign('category_id')
                ->unique()
                ->references('category_id')
                ->on('categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('id_lomba')
                ->unique()
                ->references('id_lomba')
                ->on('informasi_lombas')
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
        Schema::dropIfExists('informasi_lomba_category');
    }
};
