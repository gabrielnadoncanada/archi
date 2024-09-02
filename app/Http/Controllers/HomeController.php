<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post as BlogPost;
use App\Models\Project\Post as ProjectPost;
use App\Models\Service\Post as ServicePost;
use App\Models\Team\Post as TeamPost;
use App\Services\DataService;

class HomeController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $bannerOne = $this->dataService->getData('banner');
        $teams = TeamPost::all()->take(3);
        $projects = ProjectPost::all()->take(5);
        $services = ServicePost::all();
        $products = $this->dataService->getData('product');
        $blogs = BlogPost::all()->take(4);

        return view('home', compact('bannerOne', 'teams', 'projects', 'services', 'blogs', 'products'));
    }
}
