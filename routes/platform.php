<?php

declare(strict_types=1);

use App\Orchid\Screens\Article\ArticleEditScreen;
use App\Orchid\Screens\Article\ArticleListScreen;
use App\Orchid\Screens\Page\PageEditScreen;
use App\Orchid\Screens\Page\PageListScreen;
use App\Orchid\Screens\Partner\PartnerEditScreen;
use App\Orchid\Screens\Partner\PartnerListScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Service\ServiceEditScreen;
use App\Orchid\Screens\Service\ServiceListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

Route::screen('pages', PageListScreen::class)->name('platform.systems.pages');
Route::screen('pages/{page}/edit', PageEditScreen::class)->name('platform.systems.pages.edit');
Route::screen('pages/create', PageEditScreen::class)->name('platform.systems.pages.create');

Route::screen('partners', PartnerListScreen::class)->name('platform.systems.partners');
Route::screen('partners/{partner}/edit', PartnerEditScreen::class)->name('platform.systems.partners.edit');
Route::screen('partners/create', PartnerEditScreen::class)->name('platform.systems.partners.create');

Route::screen('services', ServiceListScreen::class)->name('platform.systems.services');
Route::screen('services/{service}/edit', ServiceEditScreen::class)->name('platform.systems.services.edit');
Route::screen('services/create', ServiceEditScreen::class)->name('platform.systems.services.create');

Route::screen('articles', ArticleListScreen::class)->name('platform.systems.articles');
Route::screen('articles/{article}/edit', ArticleEditScreen::class)->name('platform.systems.articles.edit');
Route::screen('articles/create', ArticleEditScreen::class)->name('platform.systems.articles.create');
