<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class TeamController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $teams = $this->dataService->getData('team');

        return view('team.index', compact('teams'));
    }

    public function single()
    {
        $team = $this->dataService->getData('team')[0];

        return view('team.single', compact('team'));
    }
}
