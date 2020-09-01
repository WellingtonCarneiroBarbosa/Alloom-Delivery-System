<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\Home\TestRequest;
use App\Http\Controllers\Controller;
use App\Models\AlloomDelivery\AlloomCustomer;

class TestRequestController extends Controller {
    /**
     * @var object
     */
    private $tenant;

    /**
     * Create a new controller instance.
     *
     * @param \App\Models\AlloomDelivery\AlloomCustomer $tenant
     */
    public function __construct(AlloomCustomer $tenant) {
        $this->tenant = $tenant;
    }


    /**
     * Request a licence test.
     *
     * @param \App\Http\Requests\Home\TestRequest $request
     */
    public function request(TestRequest $request) {
        try {

            $data = $request->validated();

            $data['is_tester'] = true;

            $testRequest = $this->tenant->create($data);

            return view('welcome.test.success', [
                'test' => $testRequest,
            ]);
        } catch (\Exception $e) {
            if(config('app.debug'))
                throw new \Exception($e->getMessage());
            dd("ops");

            return redirect()->back()->with(['error' => __('exceptions.error')]);
        }
    }
}
