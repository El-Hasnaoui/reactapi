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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('shortTitle');
            $table->string('shortDescription');
            $table->string('smallImg');
            $table->text('longTitle');
            $table->text('longDescription');
            $table->string('totalDuration');
            $table->string('totalLectures');
            $table->string('totalStudent');
            $table->text('skillAll');
            $table->string('videoUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
