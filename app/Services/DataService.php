<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class DataService
{
    protected $dataPath;

    public function __construct()
    {
        $this->dataPath = base_path('data'); // Make sure this path exists
    }

    public function getData($key)
    {
        $filePath = $this->dataPath.DIRECTORY_SEPARATOR.$key.'.php';

        if (File::exists($filePath)) {
            return include $filePath;
        }

        return null;
    }
}
