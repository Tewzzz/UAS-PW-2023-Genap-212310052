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
        Schema::create('Travel', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('min_pax');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Travel');
    }
};
