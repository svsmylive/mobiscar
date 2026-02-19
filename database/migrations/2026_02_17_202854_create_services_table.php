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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->foreignId('partner_id');
            $table->string('name');
            $table->string('slug');
            $table->text('preview_text')->nullable();
            $table->text('detail_text')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->integer('rank')->default(100);

            $table->timestamps();
        });

        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
