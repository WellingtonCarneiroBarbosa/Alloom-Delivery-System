<?php

namespace App\Http\Controllers\Franchise;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        $user = auth()->user();

        if($user->hasRole("manager"))
            return redirect()->route("franchise.dash.manager.home");
        else if($user->hasRole("clerk"))
            return redirect()->route("franchise.dash.clerk.home");
    }
}
