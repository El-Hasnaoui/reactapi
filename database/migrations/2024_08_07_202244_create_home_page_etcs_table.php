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
        Schema::create('home_page_etcs', function (Blueprint $table) {
            $table->id();
            $table->string('homeTitle');
            $table->string('homeSubTitle');
            $table->text('techDescription');
            $table->string('totalCourse');
            $table->string('totalStudent');
            $table->string('totalReview');
            $table->text('videoDecription');
            $table->string('videoUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_etcs');
    }
};
