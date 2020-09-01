<?php

namespace App\Http\Controllers\AlloomDelivery\Customers;

use Illuminate\Http\Request;
use App\Http\Requests\AlloomDelivery\Customers\TestRequest;
use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;

class AlloomCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alloom.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlloomDelivery\AlloomCustomer  $alloomCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(AlloomCustomer $alloomCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlloomDelivery\AlloomCustomer  $alloomCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(AlloomCustomer $alloomCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlloomDelivery\AlloomCustomer  $alloomCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlloomCustomer $alloomCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlloomDelivery\AlloomCustomer  $alloomCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlloomCustomer $alloomCustomer)
    {
        //
    }
}
