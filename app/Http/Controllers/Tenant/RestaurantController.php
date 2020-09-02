<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $_param;

    public function __construct(Request $request)
    {
        $this->tenant_restaurant = $request->route()->parameter('tenant_restaurant');

        $this->tenant = AlloomCustomer::urlPrefix($this->tenant_company)->first();

        if(! $this->tenant) {
            abort(404);
        }
    }


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
        //
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
