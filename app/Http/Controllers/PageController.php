<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\View\View;

class PageController
{
    public function index(): View
    {
        $page = Page::byCode('main')->first();
        $partners = Partner::query()->select('name')->orderBy('rank')->get();
        $services = Service::query()->orderBy('rank')->get();

        return view('index', ['page' => $page, 'partners' => $partners, 'services' => $services]);
    }

    public function partners(): View
    {
        $page = Page::byCode('partners')->first();
        $partners = Partner::with(['services' => fn($query) => $query->orderBy('rank')])->orderBy('rank')->get();

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

    public function serviceBySlug(string $slug)
    {
        $service = Service::where('slug', $slug)->first();

        if (!$service) {
            return redirect()->route('index');
        }

        $page = Page::byCode('partners')->first();

        $partner = Partner::with(['services' => fn($query) => $query->orderBy('rank')])
            ->find($service->partner_id);

        $images = $service->attachment()
            ->where('group', 'service-gallery')
            ->get()
            ->map(fn($a) => $a->url());

        return view('service', ['page' => $page, 'service' => $service, 'partner' => $partner, 'images' => $images]);
    }
}
