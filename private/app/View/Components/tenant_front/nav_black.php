<?php

namespace App\View\Components\tenant_front;

use Illuminate\View\Component;

class nav_black extends Component
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tenant_front.nav_black');
    }
}
