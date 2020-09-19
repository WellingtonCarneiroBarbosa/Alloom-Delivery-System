<?php

namespace App\Carts;

class OrderCart
{
    public $pizza_cart = [];
    public $totalQuantity;
    public $totalPrice;
    public $details;


    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->pizza_cart = $oldCart->pizza_cart;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
            $this->details = $oldCart->details;
        }
    }

    public function addPizzaToCart($border=null, $flavors, $size, $quantity, $details) {
        $unique_id = md5(uniqid());

        $pizza = [
            "id" => $unique_id,
            "border" => $border,
            "flavors" => $flavors,
            "size" => $size,
            "quantity" => $quantity,
            "details" => $details,
            "unit_price" => $this->getPizzaPrice($flavors, $border),
            "total_price" => 0,
        ];

        $pizza["total_price"] = $pizza["unit_price"] * $pizza["quantity"];

        $this->pizza_cart[$unique_id] = $pizza;
        $this->totalQuantity += $pizza["quantity"];
        $this->totalPrice += $pizza["total_price"];
    }

    public function removePizzaFromCart($pizza_id) {
        $pizza_item = $this->pizza_cart[$pizza_id];

        $this->totalQuantity -= $pizza_item["quantity"];
        $this->totalPrice -= $pizza_item["total_price"];
        unset($this->pizza_cart[$pizza_item["id"]]);
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
