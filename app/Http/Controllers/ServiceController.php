<?php

namespace App\Http\Controllers;

use AnourValar\EloquentSerialize\Service;
use App\Models\Page;
use App\Models\Service\Post;
use App\Services\DataService;

class ServiceController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        //        $services = $this->dataService->getData('service');
        $services = Post::all();
        $faqs = $this->dataService->getData('faq');

        return view('service.index', compact('services', 'faqs'));
    }

    public function show(Service $service)
    {
        return view('templates.service.single', compact('service'));
    }
}
