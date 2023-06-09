<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $description,
        public string $image = 'http://via.placeholder.com/1920x1080',
        
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
