<?php

namespace App\View\Components;

use App\Traits\Themeable;
use Illuminate\View\Component;

class Text extends Component
{
    use Themeable;

    public $as;
    public $split = false;
    public $part1;
    public $part2;
    public $text;

    public function __construct(
        $theme = 'default',
        $split = false,
        $as = 'p',
        $text = null
    )
    {
        $this->theme = $theme;
        $this->as = $as;
        $this->split = $split;
        $this->text = $text;

        if ($split && $text) {
            [$this->part1, $this->part2] = $this->explodeNewline($text);
        }
    }

    protected function explodeNewline($text)
    {
        return preg_split("/\r\n|\n|\r/", $text);
    }



    public function render()
    {
        return view('components.text');
    }
}
