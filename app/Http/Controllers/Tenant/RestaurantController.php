<?php

namespace App\Http\Controllers\Tenant;

use App\Traits\BasicCrudController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\Restaurant\Request;

class RestaurantController extends Controller
{
    use BasicCrudController;

    public function __construct()
    {
        $this->modelPath = "Tenant\Restaurant";
        $this->viewPath = "restaurants";
        $this->routePath = "restaurants.";
    }

    public function storeRequest(Request $request) {
        return $this->store($request->validated());
    }

    public function updateRequest(Request $request, $id) {
        return $this->update($request->validated(), $id);
    }
}
