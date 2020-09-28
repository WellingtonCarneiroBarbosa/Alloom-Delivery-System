<?php

namespace App\Http\Controllers\Franchise\Manager;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view("franchise.manager.home");
    }
}
