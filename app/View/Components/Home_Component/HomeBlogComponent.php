<?php

namespace App\View\Components\Home_Component;

use Illuminate\View\Component;

class HomeBlogComponent extends Component
{

     public $posts; // needs to access the posts variable in the home controller to get the data from database to view

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        //
        $this->posts= $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-component.home-blog-component');
    }
}
