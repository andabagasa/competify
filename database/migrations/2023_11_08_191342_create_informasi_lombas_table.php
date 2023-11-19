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
        Schema::create('informasi_lombas', function (Blueprint $table) {
            $table->id('id_lomba', 32)->unique();
            $table->foreignId('admin_id', 32)->unique()->references('admin_id')->on('admins')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title', 100);
            $table->string('description', 255);
            $table->string('organizer_name', 100);
            $table->string('reward', 255);
            $table->date('open_reg');
            $table->date('close_reg');
            $table->string('term_and_condition', 255);
            $table->string('poster', 255);
            $table->string('contact', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_lomba');
    }
};
