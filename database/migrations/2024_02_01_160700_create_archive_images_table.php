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
        Schema::create('archive_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('archive_id');
            $table->string('images')->nullable();
            $table->string('document')->nullable();
            $table->foreign('archive_id')->references('id')->on('archives')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archive_images');
    }
};
