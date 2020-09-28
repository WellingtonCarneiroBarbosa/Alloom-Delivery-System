<?php

namespace App\Http\Controllers\Franchise\Order;

use App\Http\Controllers\Controller;
use App\Models\Franchise\Order\Order;

class OrderStatusController extends Controller
{
    public function inProgress($order_id) {
        try {
            $order = Order::pending()->findOrFail($order_id);

            $order->update([
                "status" => "1"
            ]);

            return redirect()->back()->with([
                "success" => "Pedido marcado como em andamento e movido para a cozinha"
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Algo deu errado"
            ]);
        }
    }

    public function completed($order_id) {
        try {
            $order = Order::inProgress()->findOrFail($order_id);

            $order->update([
                "status" => "2"
            ]);

            return redirect()->back()->with([
                "success" => "Pedido marcado como concluído"
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Algo deu errado"
            ]);
        }
    }

    public function delivering($order_id) {
        try {
            $order = Order::completed()->findOrFail($order_id);

            $order->update([
                "status" => "3"
            ]);

            return redirect()->back()->with([
                "success" => "Pedido marcado como concluído"
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
