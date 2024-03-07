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
        Schema::create('school_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('about_us')->nullable();
            $table->string('mission_vision')->nullable();
            $table->string('why_choose_us')->nullable();
            $table->string('message')->nullable();
            $table->string('history')->nullable();
            $table->string('email');
            $table->string('secondary_email')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('contact_no')->nullable();
            $table->integer('secondary_contact_no')->nullable();
            $table->string('address')->nullable();
            $table->string('google_map_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
