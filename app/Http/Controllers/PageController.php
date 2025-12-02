<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use stdClass;

class PageController
{
    public function index(): View
    {
        $page = new StdClass();

        return view('index', ['page' => $page]);
    }

    public function partners(): View
    {
        $page = new StdClass();

        return view('partners', ['page' => $page]);
    }

    public function arendators(): View
    {
        $page = new StdClass();

        return view('arendators', ['page' => $page]);
    }

    public function blog(): View
    {
        $page = new StdClass();

        return view('blog', ['page' => $page]);
    }

    public function contacts(): View
    {
        $page = new StdClass();

        return view('contacts', ['page' => $page]);
    }
}
