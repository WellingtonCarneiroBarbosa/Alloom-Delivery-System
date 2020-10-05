<?php

namespace App\Http\Controllers\Franchise\Order;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Franchise\Order\Order;
use App\Notifications\Orders\StatusChanged;

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

            if($order->pick_up_at_the_counter === 1) {
                $order->forceFill([
                    'email' => $order->receiver_email,
                ])->notify(new StatusChanged($order, auth()->user()->franchise));
                $success_message = "Pedido marcado como concluído. O cliente foi notificado via e-mail";
            } else {
                $success_message = "Pedido marcado como concluído.";
            }

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

    public function delivering($order_id) {
        try {
            $order = Order::completed()->findOrFail($order_id);

            $order->update([
                "status" => "3"
            ]);

            //send notification to customer
            //Mail::to($order->receiver_email)->send(new StatusChanged($order, auth()->user()->franchise));

            $order->forceFill([
                'email' => $order->receiver_email,
            ])->notify(new StatusChanged($order, auth()->user()->franchise));

            return redirect()->back()->with([
                "success" => "Pedido marcado como à caminho. O cliente foi notificado via e-mail."
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
