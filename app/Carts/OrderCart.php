<?php

namespace App\Carts;

class OrderCart
{
    public $pizza_cart = [];
    public $totalQuantity;
    public $totalPrice;
    public $franchise_id;


    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->pizza_cart = $oldCart->pizza_cart;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
            $this->franchise_id = $oldCart->franchise_id;
        }
    }

    public function addPizzaToCart($border=null, $flavors, $size, $quantity) {
        $pizza = [
            "id" => md5(uniqid()),
            "border" => $border,
            "flavors" => $flavors,
            "size" => $size,
            "quantity" => $quantity,
            "unit_price" => $this->getPizzaPrice($flavors, $border),
            "total_price" => 0,
        ];

        $pizza["total_price"] = $pizza["unit_price"] * $pizza["quantity"];

        array_push($this->pizza_cart, $pizza);
        $this->totalQuantity += $pizza["quantity"];
        $this->totalPrice += $pizza["total_price"];
    }

    protected function getPizzaPrice($flavors, $border) {
        $quantity_flavors = count($flavors);

        $flavor_price_sum = 0;

        foreach($flavors as $flavor) {
            $flavor_price_sum += $flavor->price;
        }

        $pizza_price = $flavor_price_sum / $quantity_flavors;

        if($border) {
            $pizza_price += $border->price;
        }

        return $pizza_price;
    }
}
