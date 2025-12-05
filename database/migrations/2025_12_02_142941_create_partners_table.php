<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('job_profile')->nullable();
            $table->string('experience_years')->nullable();
            $table->text('services')->nullable();
            $table->text('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_time')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('reviews_link')->nullable();
            $table->integer('rank')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
