<?php

namespace App\View\Components\order;

use Illuminate\View\Component;

class cart_data extends Component
{
    public $cart;
    public $franchise;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cart, $franchise)
    {
        $this->cart = $cart;
        $this->franchise = $franchise;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.order.cart_data');
    }
}
