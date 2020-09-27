<?php

namespace App\Http\Controllers\Franchise;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view("franchise.home");
    }
}
