<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(12);

        return view('frontend.pages.service', ['services' => $services]);
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.service-detail', ['service' => $service]);
    }
}
