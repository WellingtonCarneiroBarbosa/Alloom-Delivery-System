<?php

namespace App\Http\Controllers\AlloomCustomers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlloomCustomers\Products\Product;
use App\Http\Requests\AlloomCustomer\Products\CreateProductRequest;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alloom_customer.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AlloomCustomer\Products\CreateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $data = $request->validated();
        try {
            Product::create($data);
            return redirect()->route('alloom_customer.products.create')->with(['success' => ucfirst($data['name']) . " " . __('success.created')]);
        } catch (\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());

            return redirect()->route('alloom_customer.products.create')->withInput($data)->with(['error' => __('exceptions.error')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlloomCustomers\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlloomCustomers\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlloomCustomers\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlloomCustomers\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
