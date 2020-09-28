<?php

namespace App\Http\Controllers\Franchise\Clerk;

use App\Http\Controllers\Controller;
use App\Models\Franchise\Order\Order;

class HomeController extends Controller
{
    public function index() {
        $orders = Order::pending()->paginate(10);
        $quantityPendingOrders = Order::pending()->count();
        $quantityInProgressOrders = Order::inProgress()->count();

        return view("franchise.clerk.home", [
            "orders" => $orders,
            "quantityPendingOrders" => $quantityPendingOrders,
            "quantityInProgressOrders" => $quantityInProgressOrders
        ]);
    }
}
