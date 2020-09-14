<?php

namespace App\Http\Controllers\TenantFront;

use App\Http\Controllers\Controller;
use App\Traits\FrancheseController;
use Illuminate\Http\Request;

class APIController extends Controller
{
    use FrancheseController;

    public function flavors() {
        $unit = $this->getTenantUnitOrFail();

        $flavors = [];

        foreach ($unit->pizzaFlavors as $flavor) {
            $flavors[] = $flavor->flavors;
            $flavor->flavors->label;
        }

        return response()->json($flavors, 200);
    }
}
