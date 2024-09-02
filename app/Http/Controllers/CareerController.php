<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class CareerController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $jobs = $this->dataService->getData('job');
        $services = $this->dataService->getData('service');
        $faqs = $this->dataService->getData('faq');

        return view('job.index', compact('jobs', 'services', 'faqs'));
    }

    public function single()
    {
        $jobs = $this->dataService->getData('job');
        $requirements = $this->dataService->getData('requirement');

        return view('job.single', compact('jobs', 'requirements'));
    }
}
