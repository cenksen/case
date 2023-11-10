<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function business(Request $request)
    {
        $page = Page::where('slug', $request->slug)->firstOrFail();
        if (! $page->is_active) {
            abort(404);
        }

        return view('frontend.pages.business', ['page' => $page]);
    }
}
