<?php

namespace App\Http\Controllers\TenantFront;

use Illuminate\Http\Request;
use App\Models\Tenant\Order\Order;
use App\Models\Tenant\Order\Pizza;
use App\Traits\FranchiseController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Tenant\Order\AddReceiverData;

class OrderController extends Controller
{
    use FranchiseController;

    public function getAllCarts() {

        $franchise = $this->getTenantFranchiseOrFail();
        $order_cart = Session::has('order-cart') ? Session::get('order-cart') : null;

        return view("components.order.modal-content", [
            "franchise" => $franchise,
            "order_cart" => $order_cart
        ]);
    }

    public function viewAddReceiverData() {
        return view("tenant-front.franchise.order.steps.one", [
            "franchise" => $this->getTenantFranchiseOrFail()
        ]);
    }

    public function storeReceiverData(AddReceiverData $request) {
        $data = $request->validated();
        $franchise = $this->getTenantFranchiseOrFail();

        $data["totalPrice"] = "0";
        $data["totalQuantity"] = "0";
        $data["franchise_id"] = $franchise->id;

        $order = Order::create($data);

        return redirect()->route("tenant-front.franchise.order.make.step-get-2", [$franchise->tenant->url_prefix, $franchise->url_prefix, $order]);
    }

    public function confirmOrder($cart_data) {
        //do something interesting here
    }
}
