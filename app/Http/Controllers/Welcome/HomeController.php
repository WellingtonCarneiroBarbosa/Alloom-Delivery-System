<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome.index');
    }

    public function privacyPolicy() {
        return view('welcome.cookies');
    }
}
