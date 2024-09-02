<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class AboutController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $teams = $this->dataService->getData('team');

        return view('about', compact('teams'));
    }
}
