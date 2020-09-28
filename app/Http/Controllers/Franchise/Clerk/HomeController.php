<?php

namespace App\Http\Controllers\Franchise\Clerk;

use App\Http\Controllers\Controller;
use App\Models\Franchise\Order\Order;

class HomeController extends Controller
{
    public function index() {
        $orders = Order::orderBy("updated_at", "ASC")->where("order_status_id", null)->where("confirmed_by_receiver", "1")->paginate(10);
        $quantityPendingOrders = Order::where("order_status_id", null)->where("confirmed_by_receiver", "1")->count();
        $quantityInProgressOrders = Order::where("order_status_id", "1")->count();

        return view("franchise.clerk.home", [
            "orders" => $orders,
            "quantityPendingOrders" => $quantityPendingOrders,
            "quantityInProgressOrders" => $quantityInProgressOrders
        ]);
    }
}
