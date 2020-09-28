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
                "error" => "Não foi possível localizar o pedido"
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
                "error" => "Não foi possível localizar o pedido"
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
                "success" => "Pedido marcado como à caminho"
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Não foi possível localizar o pedido"
            ]);
        }
    }

    public function delivered($order_id) {
        try {
            $order = Order::delivering()->find($order_id);

            /**
             * Order to pick up at the
             * counter
             *
             */
            if(! $order) {
                $order = Order::completed()->findOrFail($order_id);

                $success_message = "Pedido finalizado";
            } else {
                $success_message = "Pedido marcado como entregue";
            }

            $order->update([
                "status" => "4"
            ]);

            return redirect()->back()->with([
                "success" => $success_message
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Não foi possível localizar o pedido"
            ]);
        }
    }

    public function canceled($order_id) {
        try {
            $order = Order::findOrFail($order_id);

            $order->update([
                "status" => "5"
            ]);

            return redirect()->back()->with([
                "success" => "Pedido cancelado"
            ]);
        } catch (\Exception $e) {
            if(config("app.debug"))
                throw new \Exception($e->getMessage());

            return redirect()->back()->with([
                "error" => "Não foi possível localizar o pedido"
            ]);
        }
    }
}
