<?php

namespace App\Carts;

class PizzaCartPricePerSize {
    public $pizzas = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $unit_id;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->pizzas = $oldCart->pizzas;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->unit_id = $oldCart->unit_id;
        }
    }

    public function add($pizza_size, $flavors, $pizza_size_id, $unit_id) {

        $storedPizzaSize = [
            "qty" => 0,
            "price" => $pizza_size->price,
            "pizza_size" => $pizza_size,
            "pizza_flavors" => $flavors,
        ];

        if ($this->pizzas) {
            if(array_key_exists($pizza_size_id, $this->pizzas)) {
                $storedPizzaSize = $this->pizzas[$pizza_size_id];
            }
        }

        $storedPizzaSize["qty"]++;
        $storedPizzaSize["price"] = $pizza_size->price * $storedPizzaSize["qty"];
        $this->pizzas[$pizza_size_id] = $storedPizzaSize;
        $this->totalQty++;
        $this->totalPrice += $pizza_size->price;
        $this->unit_id = $unit_id;
    }
}
