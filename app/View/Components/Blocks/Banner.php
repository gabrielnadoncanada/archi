<?php

namespace App\View\Components\Blocks;

use Illuminate\View\Component;

class Banner extends Component
{
    public $subtitle;

    public $title;

    public $description;

    public $image;

    public string $part1;

    public string $part2;

    public function __construct($title, $image, $description = null, $subtitle = null)
    {
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->part1 = '';
        $this->part2 = '';
        if (! empty($title)) {
            $this->splitTitle($title);

        }
    }

    private function splitTitle(string $title): void
    {
        $title = trim($title);

        $newlinePos = strrpos($title, "\n");

        if ($newlinePos !== false) {
            $part1 = substr($title, 0, $newlinePos);
            $part2 = substr($title, $newlinePos + 1);
        } else {
            $part1 = $title;
            $part2 = '';
        }

        $this->part1 = str_replace("\n", '', $part1);
        $this->part2 = str_replace("\n", '', $part2);
    }

    public function render()
    {
        return view('components.blocks.banner');
    }
}
