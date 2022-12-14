<?php

namespace App\View\Components\AdminComponent;

use Illuminate\View\Component;

class ShowAllPosts extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->posts= $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-component.show-all-posts');
    }
}
