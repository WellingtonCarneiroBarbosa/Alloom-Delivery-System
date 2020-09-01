<?php

namespace App\Http\Controllers\AlloomDelivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testRequests = AlloomCustomer::testRequests()->get();
        return view('alloom.home', [
            'testRequests' => $testRequests,
        ]);
    }
}
