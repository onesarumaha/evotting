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
        Schema::create('pemilihan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
            $table->text('deskripsi')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilihan');
    }
};
