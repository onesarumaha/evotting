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
        Schema::create('hasil_suara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pemilih_id');
            $table->unsignedBigInteger('kandidat_id');
            $table->timestamp('vote_at')->nullable();

            $table->foreign('pemilih_id')->references('id')->on('pemilihan')->onDelete('cascade');
            $table->foreign('kandidat_id')->references('id')->on('kandidat')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_suara');
        
    }
};
