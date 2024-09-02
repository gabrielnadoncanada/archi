<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class ContactController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $addresses = $this->dataService->getData('address');

        return view('contact', compact('addresses'));
    }
}
