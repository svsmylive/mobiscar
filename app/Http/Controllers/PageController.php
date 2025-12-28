<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Partner;
use Illuminate\View\View;

class PageController
{
    public function index(): View
    {
        $page = Page::byCode('main')->first();
        $partners = Partner::query()->select('name')->orderBy('rank')->get();

        return view('index', ['page' => $page, 'partners' => $partners]);
    }

    public function partners(): View
    {
        $page = Page::byCode('partners')->first();
        $partners = Partner::query()->orderBy('rank')->get()
            ->map(function ($partner) {
                $partner->services = explode(',', $partner->services);

                return $partner;
            });

        return view('partners', ['page' => $page, 'partners' => $partners]);
    }

    public function arendators(): View
    {
        $page = Page::byCode('arendators')->first();

        return view('arendators', ['page' => $page]);
    }

    public function blog(): View
    {
        $page = Page::byCode('blog')->first();
        $articles = Article::query()
            ->orderByRaw('CASE WHEN `rank` IS NULL THEN 1 ELSE 0 END')
            ->orderBy('rank', 'asc')
            ->get();

        return view('blog', ['page' => $page, 'articles' => $articles]);
    }

    public function contacts(): View
    {
        $page = Page::byCode('contacts')->first();

        return view('contacts', ['page' => $page]);
    }

    public function article(string $slug): View
    {
        $page = Page::byCode('blog')->first();
        $article = Article::bySlug($slug)->first();

        return view('article', ['page' => $page, 'article' => $article]);
    }
}
