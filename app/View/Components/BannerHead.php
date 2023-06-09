<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerHead extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public $breadcrumb,
        public $bgimage = 'url(/assets/images/backgrounds/page-header-bg-1-1.jpg)'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-head');
    }
}
