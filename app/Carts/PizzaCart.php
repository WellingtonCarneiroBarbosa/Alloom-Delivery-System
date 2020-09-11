<?php

namespace App\Carts;;

class PizzaCart {
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $tenant_id;
    public $unit_id;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->tenant_id = $oldCart->tenant_id;
            $this->unit_id = $oldCart->unit_id;
        }
    }

    public function add($item, $id) {

        dd($item);

        $storedItem = [
            "qty" => 0,
            "price" => $item->price,
            "item" => $item
        ];

        if ($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem["qty"]++;
        $storedItem["price"] = $item->price * $storedItem["price"];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
