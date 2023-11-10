<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);

        return view('frontend.pages.blog', ['blogs' => $blogs]);
    }

    public function category($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $blogs = $category->blog()->latest()->paginate(6);

        return view('frontend.pages.blog', ['blogs' => $blogs]);
    }

    public function show($categorySlug, $blogSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $blog = $category->blog()->where('slug', $blogSlug)->firstOrFail();

        return view('frontend.pages.blog-detail', ['blog' => $blog, 'category' => $category]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $blogs = Blog::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->paginate(8);

        return view('frontend.pages.blog', compact('blogs'));
    }
}
