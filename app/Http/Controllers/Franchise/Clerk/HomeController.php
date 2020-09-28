<?php

namespace App\Http\Controllers\Franchise\Clerk;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view("franchise.clerk.home");
    }
}
