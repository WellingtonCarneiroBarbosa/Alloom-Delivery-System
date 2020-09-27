<?php

namespace App\View\Components\tenant_front;

use Illuminate\View\Component;

class nav extends Component
{
    public $type;


    public $franchise;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($franchise, $type)
    {
        $this->franchise = $franchise;
        $this->type = $type;

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
