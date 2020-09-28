<?php

namespace App\Http\Controllers\Franchise\Order;

use App\Http\Controllers\Controller;
use App\Models\Franchise\Order\Order;

class OrderController extends Controller
{
    public function show($order_id) {
        try {
            $order = Order::findOrFail($order_id);
            $order->pizzas;

            return view("franchise.order.show", [
                "order" => $order
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Algo deu errado"
            ]);
        }
    }
}
