<?php

use App\Models\Page;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('code');
            $table->text('title')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });

        $this->fillData();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }

    public function fillData()
    {
        $data = [
            [
                'name' => 'Главная',
                'url' => '/',
                'code' => 'main',
                'title' => 'Мобискар',
                'description' => 'Мобискар',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Партнеры',
                'code' => 'partners',
                'url' => '/partners',
                'title' => 'Мобискар',
                'description' => 'Мобискар',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Арендаторам',
                'code' => 'arendators',
                'url' => '/arendators',
                'title' => 'Мобискар',
                'description' => 'Мобискар',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Блог',
                'code' => 'blog',
                'url' => '/blog',
                'title' => 'Мобискар',
                'description' => 'Мобискар',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Контакты',
                'code' => 'contacts',
                'url' => '/contacts',
                'title' => 'Мобискар',
                'description' => 'Мобискар',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Page::insert($data);
    }
};
