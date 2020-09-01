<?php

namespace App\Http\Controllers\AlloomDelivery\Customers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;
use App\Models\AlloomDelivery\Customers\Customer;
use App\Models\AlloomDelivery\AlloomMasterCustomer;
use App\Http\Requests\AlloomDelivery\Customers\CreateMasterCustomerRequest;

class MasterCustomerController extends Controller
{
    /**
     * @var object
     */
    private $master_customer;

    /**
     * Create a new controller instance.
     *
     * @param App\Models\AlloomDelivery\Customers\Customer $master_customer
     */
    public function __construct(User $master_customer) {
        $this->master_customer = $master_customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AlloomMasterCustomer::master()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($alloom_customer)
    {
        $alloom_customer = AlloomCustomer::findOrFail($alloom_customer);
        return view('alloom.customers.master.create', [
            'alloom_customer' => $alloom_customer,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AlloomDelivery\Customers\CreateMasterCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMasterCustomerRequest $request, $alloom_customer)
    {
        $data = $request->validated();
        $alloom_customer = AlloomCustomer::findOrFail($alloom_customer);
        try {
            $data['is_master'] = true;
            $data['alloom_customer_id'] = $alloom_customer->id;
            $data['password'] = bcrypt("password");
            $master_customer = $this->master_customer->create($data);

            $master_customer->assignRole('manager');

            return redirect()->route('alloom_user.customers.master.index')->with(['success' => __('success.created')])->withInput($data);
        } catch (\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());

            return redirect()->route('alloom_user.customers.master.create', [
                $alloom_customer
            ])->with(['error' => __('exceptions.error')])->withInput($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlloomDelivery\Customers\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlloomDelivery\Customers\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlloomDelivery\Customers\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlloomDelivery\Customers\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
