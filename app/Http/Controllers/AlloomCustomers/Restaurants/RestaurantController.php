<?php

namespace App\Http\Controllers\AlloomCustomers\Restaurants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlloomCustomers\Restaurants\Restaurant;
use App\Http\Requests\AlloomCustomer\Restaurants\CreateRestaurantRequest;

class RestaurantController extends Controller
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
        return view('alloom_customer.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AlloomCustomer\Restaurants\CreateRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRestaurantRequest $request)
    {
        $data = $request->validated();
        try {
            Restaurant::create($data);

            return redirect()->route('alloom_customer.restaurants.create')->with(['success' => "Unidade" . " " . ucfirst($data['name']) . " " . __('success.created')]);
        } catch (\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());
            return redirect()->route('alloom_customer.restaurants.create')->withInput($data)->with(['error' => __('exceptions.error')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlloomCustomers\Restaurants\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlloomCustomers\Restaurants\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlloomCustomers\Restaurants\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlloomCustomers\Restaurants\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
