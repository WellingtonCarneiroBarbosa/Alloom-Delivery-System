<?php

namespace App\View\Components\tenant_front;

use Illuminate\View\Component;

class nav extends Component
{
    public $franchise;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($franchise)
    {
        $this->franchise = $franchise;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tenant_front.nav');
    }
}
