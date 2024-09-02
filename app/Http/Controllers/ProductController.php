<?php

namespace App\Http\Controllers;

use App\Services\DataService;

class ProductController extends Controller
{
    protected DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $products = $this->dataService->getData('product');

        return view('product.index', compact('products'));
    }

    public function single()
    {
        $products = $this->dataService->getData('product');

        return view('product.single', compact('products'));
    }
}
