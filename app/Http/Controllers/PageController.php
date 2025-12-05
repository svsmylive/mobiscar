<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Partner;
use Illuminate\View\View;

class PageController
{
    public function index(): View
    {
        $page = Page::byCode('main')->first();

        return view('index', ['page' => $page]);
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

        return view('blog', ['page' => $page]);
    }

    public function contacts(): View
    {
        $page = Page::byCode('contacts')->first();

        return view('contacts', ['page' => $page]);
    }
}
