<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post as BlogPost;
use App\Models\Page;
use App\Services\DataService;
use App\Settings\ThemeSettings;

class BlogController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }


    public function show($slug = null)
    {

        if ($slug) {
            $blogPost = BlogPost::where('slug', $slug)->published()->first();

            if ($blogPost) {
                $record = $blogPost;
            }
        }

        return view('templates.single', [
            'record' => $record,
        ]);
    }
}
