<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;
use App\Models\Franchise\Order\Order;
use Illuminate\Support\Facades\Session;

class OrderAccessKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $franchise = $request->get("franchise");
        $order = Order::findOrFail($request->route("order_id"));

        if(Session::has("order-access-key-" . $franchise->id)) {
            if (Session::get("order-access-key-" . $franchise->id) === $order->access_key) {
                return $next($request);
            }
        }

        return redirect()->route("tenant-front.franchise.order.confirm-access-key.view", [
            $franchise->tenant->url_prefix, $franchise->url_prefix, $order->id
        ]);
    }
}
