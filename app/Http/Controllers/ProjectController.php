<?php

namespace App\Http\Controllers;

use App\Models\Project\Post as ProjectPost;
use App\Models\Team\Post as TeamPost;
use App\Services\DataService;

class ProjectController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $projects = ProjectPost::all();
        $teams = TeamPost::all();

        return view('project.index', compact('projects', 'teams'));
    }

    public function single()
    {
        $project = ProjectPost::all()->first();
        $teams = TeamPost::all();

        return view('project.single', compact('project', 'teams'));
    }
}
