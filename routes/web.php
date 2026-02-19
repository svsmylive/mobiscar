<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('', [PageController::class, 'index'])->name('index');
Route::get('partners', [PageController::class, 'partners'])->name('partners');
Route::get('arendators', [PageController::class, 'arendators'])->name('arendators');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/article/{slug}', [PageController::class, 'article'])->name('article.show');
Route::get('contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('application', [ApplicationController::class, 'send'])->middleware('throttle:application')->name(
    'application.send'
);
Route::get('/services/{slug}', [PageController::class, 'serviceBySlug'])->name('service_by_slug');

Route::fallback(function () {
    return view('404');
});
