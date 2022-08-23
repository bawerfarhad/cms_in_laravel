<?php

namespace App\View\Components\Home_Component;

use Illuminate\View\Component;

class HomeSidebarWedgetsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-component.home-sidebar-wedgets-component');
    }
}
