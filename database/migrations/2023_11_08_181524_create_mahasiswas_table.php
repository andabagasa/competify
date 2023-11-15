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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id('mahasiswa_id', 32)->unique();
            $table->foreignId('guest_id', 32)->unique()->references('guest_id')->on('guests');
            $table->char('nim', 20)->unique()->nullable();
            $table->string('description', 255)->nullable();
            $table->string('no_tlp', 255)->unique();
            $table->string('acc_linkedin', 255)->nullable();
            $table->string('acc_instagram', 255)->nullable();
            $table->string('photo', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
