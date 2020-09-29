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
        $orders = Order::inProgress()->recentlyUpdated()->paginate(10);
        $quantityPendingOrders = Order::pending()->count();
        $quantityInProgressOrders = Order::inProgress()->count();

        return view("franchise.order.in-progress", [
            "orders" => $orders,
            "quantityPendingOrders" => $quantityPendingOrders,
            "quantityInProgressOrders" => $quantityInProgressOrders
        ]);
    }

    public function completed() {
        $orders = Order::completed()->recentlyUpdated()->paginate(10);
        $quantityCompletedOrders = Order::completed()->count();

        return view("franchise.order.completed", [
            "orders" => $orders,
            "quantityCompletedOrders" => $quantityCompletedOrders
        ]);
    }

    public function delivering() {
        $orders = Order::delivering()->recentlyUpdated()->paginate(10);
        $quantityDeliveringOrders = Order::delivering()->count();

        return view("franchise.order.delivering", [
            "orders" => $orders,
            "quantityDeliveringOrders" => $quantityDeliveringOrders
        ]);
    }

    public function delivered() {
        $orders = Order::delivered()->recentlyCreated()->paginate(10);
        $quantityDeliveredOrders = Order::delivered()->count();

        return view("franchise.order.delivered", [
            "orders" => $orders,
            "quantityDeliveredOrders" => $quantityDeliveredOrders
        ]);
    }

    public function canceled() {
        $orders = Order::canceled()->recentlyCreated()->paginate(10);
        $quantityCanceledOrders = Order::canceled()->count();

        return view("franchise.order.canceled", [
            "orders" => $orders,
            "quantityCanceledOrders" => $quantityCanceledOrders
        ]);
    }
}
