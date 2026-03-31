<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Specs extends Component
{
    public $specs;
    /**
     * Create a new component instance.
     */
    public function __construct($specs)
    {
        //
        $this->specs = $specs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.specs');
    }
}
