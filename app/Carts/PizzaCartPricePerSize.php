<?php

namespace App\Carts;

class PizzaCartPricePerSize {
    public $pizzas = [];
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

    public function add($pizza_size, $flavors, $pizza_order_qty, $unit_id) {

        $storedPizzaSize = [
            "qty" => $pizza_order_qty,
            "unit_price" => $pizza_size->price,
            "total_price" => 0,
            "pizza_size" => $pizza_size,
            "pizza_flavors" => $flavors,
        ];


        /**
         * if ($this->pizzas) {
            if(array_key_exists($pizza_size_id, $this->pizzas)) {
                $storedPizzaSize = $this->pizzas[$pizza_size_id];
            }
        }
         */

        $storedPizzaSize["total_price"] = $pizza_size->price * $storedPizzaSize["qty"];
        array_push($this->pizzas, $storedPizzaSize);
        //$this->pizzas[] = $storedPizzaSize;
        $this->totalQty += $storedPizzaSize["qty"];
        $this->totalPrice += $storedPizzaSize["total_price"];
        $this->unit_id = $unit_id;
    }
}
