<?php

namespace App\Http\Controllers\Franchise;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $user = auth()->user();
        if($user->hasRole("manager"))
            return view("franchise.manager.home");
        else if($user->hasRole("clerk"))
            return view("franchise.clerk.home");
    }
}
