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

    public function inProgress() {
        $orders = Order::inProgress()->paginate(10);
        $quantityPendingOrders = Order::pending()->count();
        $quantityInProgressOrders = Order::inProgress()->count();

        return view("franchise.order.in-progress", [
            "orders" => $orders,
            "quantityPendingOrders" => $quantityPendingOrders,
            "quantityInProgressOrders" => $quantityInProgressOrders
        ]);
    }
}
