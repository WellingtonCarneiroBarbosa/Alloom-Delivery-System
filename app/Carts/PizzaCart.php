<?php

namespace App\Carts;

class PizzaCart
{
    protected array $pizzas;
    protected string $totalQuantity;
    protected string $totalPrice;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->pizzas = $oldCart->pizzas;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($border=null, $flavors, $size, $quantity) {
        $pizza = [
            "border" => $border,
            "flavors" => $flavors,
            "size" => $size,
            "quantity" => $quantity,
            "unit_price" => $this->getPizzaPrice($flavors, $border),
            "total_price" => 0,
        ];

        $piza["total_price"] = $pizza["unit_price"] * $pizza["quantity"];

        array_push($this->pizzas, $pizza);
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
